 <?php
 if(!isset($_SESSION['cart'])){
     $_SESSION['cart'] = [];
 }
  if (isset($_POST['add_cart'])) {
      
      $id_product=$_POST['id_product'];
      $name_product=$_POST['name_product'];
      $price=$_POST['price'];
      $quanlity=1;
      $image = $_POST['image'];
      $total=$price * $quanlity;

     $cart= [$id_product,$name_product,$price,$quanlity,$image,$total];
     $_SESSION['cart'][] = $cart;

  }
 ?>   


    <main class="main">
      <nav class="collection__nav">
        <div class="collection__nav-text center-center">
          <h1>Your Shopping Cart</h1>
          <a href="index.html" class="text__gray">Home </a
          ><span class="text__gray">/</span>
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
  <?php foreach($_SESSION['cart'] as $giohang){ ?> 
         <?php $thanh_tien=$giohang[2]*$giohang[3] ?>
         <?php $tong_tien += $thanh_tien  ?>
         
          <div class="cart__form-info cart__form-grid border-cart">
            <div class="cart__info-product">
              <a href="#"
                ><img src="<?= $giohang[4]?>" alt="" />
              </a>
              <div class="cart__product-text">
                <p class="product__text"><?= $giohang[1]?></p>
                <span class="text__gray">740mm/ pink / canvas</span>
              </div>
            </div>
            <div class="cart__info-price">
              <p id="cart__price"><?= $giohang[2]?></p>
            </div>
            <div class="cart__info-quanlity" id="demo">
              <span id="cart__minus" class="cart__quantity-btn">-</span>

              <span id="cart__count" class="cart__quantity-btn"><?= $giohang[3]?></span>

              <span id="cart__plus" class="cart__quantity-btn">+</span>
            </div>
            <div class="cart__info-total">
              <p id="cart__total"><?=$giohang[5] ?></p>
            </div>
            <div class="cart__info-remove">
              <p><i class="fas fa-times"></i></p>
            </div>
          </div>
  <?php } ?>
          <div class="cart__form-btn border-cart">
            <div class="cart__btn-note">
              <span class="text__gray" id="cart__btn-note">Thêm ghi chú</span>
              <form action="">
                <textarea
                  name=""
                  id="cart__btn-textarea"
                  placeholder="Lời nhắn đến chúng tôi"
                ></textarea>
              </form>
            </div>
            <div class="cart__btn-main">
              <div class="cart__main-bill">
                <p class="text__gray">
                  Tổng hóa đơn :
                  <span class="text__gray" id="cart__bill"><?= $tong_tien ?></span>
                </p>
              </div>
              <div class="cart__main-button">
                <button class="btn cart__button-primary">
                  <a href="#">Tiếp tục mua hàng</a>
                </button>
                <button class="btn cart__button-primary">
                  <a href="#">Thanh toán</a>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
