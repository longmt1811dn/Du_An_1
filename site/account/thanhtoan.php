<?php
require_once "dao/admin_cart.php";
if (isset($_POST['submit-thanhtoan'])) {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $date = date("Y-m-d");
    $status = 0;
    $checkout = $_POST['checkout'];
    $id_bill = cart_add($last_name, $first_name, $email, $phone, $address, $note, $status, $_SESSION['users']['id_user']);
    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
        $name_product = $_SESSION['cart'][$i][1];
        $number = $_SESSION['cart'][$i][3];
        $price = $_SESSION['cart'][$i][2];
        $thanhtien = $_SESSION['cart'][$i][5];
        $total = $price * $number;
        cart_add_billdetal($name_product, $number, $price, $total, $id_bill);
    }
    unset($_SESSION['thanhtien']);
    unset($_SESSION['cart']);
}
?>
<main class="main">
    <nav class="collection__nav">
        <div class="collection__nav-text center-center">
            <h1>Cảm ơn quý khách đã mua hàng</h1>


        </div>
    </nav>

    <form action="" class="cart__container-form" method="post">

        <div class="cart__container">
            <div class="cart__form-grid cart__form-head">
                <div class="cart__form-title">
                    <p>Sản phẩm</p>
                </div>
                <div class="cart__form-title">
                    <p>Giá</p>
                </div>
                <div class="cart__form-title">
                    <p>Số lượng</p>
                </div>
                <div class="cart__form-title">
                    <p>Tổng</p>
                </div>
                <!-- <div class="cart__form-title">
                    <p>Xóa</p>
                </div> -->
            </div>

            <?php $thongin = cart_selectallproduct($id_bill);
            foreach ($thongin as $giohang) { ?>
                <?php $thanhtien = $giohang['price'] * $giohang['number'] ?>
                <?php $tong_tien += $thanhtien  ?>

                <div class="cart__form-info cart__form-grid border-cart">
                    <div class="cart__info-product">
                      
                        <div class="cart__product-text">
                            <p class="product__text"><?= $giohang['name_product'] ?></p>
                        </div>
                    </div>
                    <div class="cart__info-price">
                        <p id="cart__price"><?= number_format($giohang['price']); ?></p>
                    </div>
                    <div class="cart__info-quanlity" id="demo">
                        <span id="cart__minus" class="cart__quantity-btn">-</span>

                        <span id="cart__count" class="cart__quantity-btn"><?= $giohang['number'] ?></span>

                        <span id="cart__plus" class="cart__quantity-btn">+</span>
                    </div>
                    <div class="cart__info-total">
                        <p id="cart__total"><?= number_format($thanhtien) ?></p>
                    </div>
                    <div class="cart__info-remove">
                        <!-- <a href="?page=account&act=cart&delete&id_cart=<?= $i ?>">
              <p><i class="fas fa-times"></i></p>
            </a> -->
                    </div>
                </div>
            <?php
            }  ?>
            <div class="cart__form-btn border-cart">
                <div class="cart__btn-note">
                    <!-- <span class="text__gray" id="cart__btn-note">Thêm ghi chú</span>
           <form action="">
             <textarea name="" id="cart__btn-textarea" placeholder="Lời nhắn đến chúng tôi"></textarea> -->

                </div>
                <div class="cart__btn-main">
                    <div class="cart__main-bill">
                        <p class="text__gray">
                            Tổng hóa đơn :
                            <span class="text__gray" id="cart__bill"><?= number_format($tong_tien) ?></span>
                        </p>
                    </div>
                    <div class="cart__main-button">
                        <!-- <button class="btn cart__button-primary"> -->
                        <!-- <a href="?page=account&act=cart&deleteall">Xoá tất cả</a> -->
                        <!-- </button> -->
                        <!-- <button class="btn cart__button-primary"> -->
                        <!-- <a onclick="history.back()">Tiếp tục mua hàng</a> -->
                        <!-- </button> -->

                    </div>
                </div>

            </div>
            <fieldset class="profile__fieldset">
                <legend>Thông tin nhận hàng</legend>
                <div class="form-group">
                    <label class="profile__label" for="">Họ: <?= $first_name ?></label>

                </div>
                <div class="form-group">
                    <label class="profile__label" for="">Tên: <?= $last_name ?></label>

                </div>
                <div class="form-group">
                    <label class="profile__label" for="">Email: <?= $email ?></label>

                </div>
                <div class="form-group">
                    <label class="profile__label" for="">Số điện thoại: <?= $phone ?></label>

                </div>
                <div class="form-group">
                    <label class="profile__label" for="">Địa chỉ: <?= $address ?></label>

                </div>
                <div class="form-group">
                    <label class="profile__label" for="">Ghi chú khách hàng</label>
                    <p><?= $note ?></p>
                    <p>Phương thức thanh toán: <?= $checkout ?></p>
                </div>

            </fieldset>

            <!-- <button name="submit-thanhtoan" style="float: right;" class="btn cart__button-primary">
            Thanh toán
        </button> -->
    </form>
    </div>
</main>