<main class="main">
    <nav class="collection__nav">
        <div class="collection__nav-text center-center">
            <h1>Đơn hàng của tôi</h1>


        </div>
    </nav>

    <form action="" class="cart__container-form" method="post">

        <div class="cart__container">
            <div class="cart__form-grid cart__form-head">
                <div class="cart__form-title">
                    <p>Mã hoá đơn</p>
                </div>

                <div class="cart__form-title">
                    <p>Số lượng</p>
                </div>
                <div class="cart__form-title">
                    <p>Tổng tiền</p>
                </div>
                <div class="cart__form-title">
                    <p>Trạng thái</p>
                </div>
            </div>



            <?php $donhangcuatoi = mycart_selectall($id_user);

            foreach ($donhangcuatoi as $mycart) { ?>
                <div class="cart__form-info cart__form-grid border-cart">
                    <div class="cart__info-product">

                        <div class="cart__product-text">
                            <p class="product__text"><?= $mycart['id_bill'] ?></p>
                        </div>
                    </div>
                    <div class="cart__info-price">
                        <p id="cart__price"><?= mycart_getCount($mycart['id_bill']) ?></p>
                    </div>
                    <div class="cart__info-quanlity" id="demo">


                        <span id="cart__count" class="cart__quantity-btn"><?= number_format(mycart_getTotal($mycart['id_bill'])) ?></span>


                    </div>
                    <div class="cart__info-total">
                        <p id="cart__total"><?= ($mycart['status'] == 0) ? "Chưa duyệt" : "Đã duyệt" ?></p>
                    </div>
                    <div class="cart__info-remove">
                        <!-- <a href="?page=account&act=cart&delete&id_cart=<?= $i ?>">
              <p><i class="fas fa-times"></i></p>
            </a> -->
                    </div>
                </div>
            <?php } ?>




            <!-- <button name="submit-thanhtoan" style="float: right;" class="btn cart__button-primary">
            Thanh toán
        </button> -->

    </form>
    </div>
</main>