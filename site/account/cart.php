<?php
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}
if (isset($_POST['add_cart'])) {

  $id_product = $_POST['id_product'];
  $name_product = $_POST['name_product'];
  $price = $_POST['price'];
  $quanlity = 1;
  $image = $_POST['image'];
  $total = $price * $quanlity;

  $check = 0;
  for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
    if ($_SESSION['cart'][$i][0] == $id_product) {
      $check = 1;
      $quanlitynew = $quanlity + $_SESSION['cart'][$i][3];
      $_SESSION['cart'][$i][3] = $quanlitynew;
    }
  }
  if ($check == 0) {
    $cart = [$id_product, $name_product, $price, $quanlity, $image, $total];
    $_SESSION['cart'][] = $cart;
  }
}
?>


<main class="main">
  <nav class="collection__nav">
    <div class="collection__nav-text center-center">
      <h1>Your Shopping Cart</h1>
      <a href="index.html" class="text__gray">Home </a><span class="text__gray">/</span>
      <span class="text__gray">Your Shopping Cart</span>
    </div>
  </nav>

  <div class="cart__container">
    <form action="" class="cart__container-form">
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
        <div class="cart__form-title">
          <p>Xóa</p>
        </div>
      </div>

      <?php $i = 0;
      foreach ($_SESSION['cart'] as $giohang) { ?>
        <?php $thanh_tien = $giohang[2] * $giohang[3] ?>
        <?php $tong_tien += $thanh_tien  ?>

        <div class="cart__form-info cart__form-grid border-cart">
          <div class="cart__info-product">
            <a href="#"><img src="<?= $giohang[4] ?>" alt="" />
            </a>
            <div class="cart__product-text">
              <p class="product__text"><?= $giohang[1] ?></p>
              <span class="text__gray">740mm/ pink / canvas</span>
            </div>
          </div>
          <div class="cart__info-price">
            <p id="cart__price"><?= number_format($giohang[2]) ?></p>
          </div>
          <div class="cart__info-quanlity" id="demo">
            <span id="cart__minus" class="cart__quantity-btn">-</span>

            <span id="cart__count" class="cart__quantity-btn"><?= $giohang[3] ?></span>

            <span id="cart__plus" class="cart__quantity-btn">+</span>
          </div>
          <div class="cart__info-total">
            <p id="cart__total"><?= number_format($giohang[5]) ?></p>
          </div>
          <div class="cart__info-remove">
            <a href="?page=account&act=cart&delete&id_cart=<?= $i ?>">
              <p><i class="fas fa-times"></i></p>
            </a>
          </div>
        </div>
      <?php $i += 1;
      }  ?>
      <div class="cart__form-btn border-cart">
        <div class="cart__btn-note">
          <!-- <span class="text__gray" id="cart__btn-note">Thêm ghi chú</span>
           <form action="">
             <textarea name="" id="cart__btn-textarea" placeholder="Lời nhắn đến chúng tôi"></textarea> -->
    </form>
  </div>
  <div class="cart__btn-main">
    <div class="cart__main-bill">
      <p class="text__gray">
        Tổng hóa đơn :
        <span class="text__gray" id="cart__bill"><?= number_format($tong_tien) ?></span>
      </p>
    </div>
    <div class="cart__main-button">
      <button class="btn cart__button-primary">
        <a href="?page=account&act=cart&deleteall">Xoá tất cả</a>
      </button>
      <button class="btn cart__button-primary">
        <a onclick="history.back()">Tiếp tục mua hàng</a>
      </button>

    </div>
  </div>

  </div>
  <fieldset class="profile__fieldset">
    <legend>Thông tin nhận hàng</legend>
    <div class="form-group">
      <label class="profile__label" for="">Họ</label>
      <input class="profile__input" type="text" name="" value="" placeholder="Nguyễn" required>
    </div>
    <div class="form-group">
      <label class="profile__label" for="">Tên</label>
      <input class="profile__input" type="text" name="" value="" placeholder="An" required>
    </div>
    <div class="form-group">
      <label class="profile__label" for="">Email</label>
      <input class="profile__input" type="text" name="" value="" placeholder="email@gmail.com" required>
    </div>
    <div class="form-group">
      <label class="profile__label" for="">Số điện thoại</label>
      <input class="profile__input" type="text" name="" value="" placeholder="+84" required>
    </div>
    <div class="form-group">
      <label class="profile__label" for="">Địa chỉ</label>
      <input class="profile__input" type="text" name="" value="" placeholder="Địa chỉ" required>
    </div>
    <div class="form-group">
      <label class="profile__label" for="">Ghi chú khách hàng</label>
      <textarea class="profile__textarea" name="" id="" cols="30" rows="10" placeholder="Ghi chú khách hàng"></textarea>
    </div>
    <div class="form-group">
      <label class="profile__label" for=""><input type="radio" checked>Thanh toán khi nhận hàng</label>
    </div>
  </fieldset>
  <button style="float: right;" class="btn cart__button-primary">
    <a href="#">Thanh toán</a>
  </button>
  </form>
  </div>
</main>