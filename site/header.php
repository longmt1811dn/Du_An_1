<header class="header grid-container">
  <div class="header__logo">
    <a href="index.php">
      <img src="./assets/image/logo.png" alt="" /></a>
  </div>

  <!-- Menu Header -->
  <?php require_once './site/menu.php'; ?>

  <div class="header__user">
    <div class="header__user-find">
      <i class="fas fa-search"></i>
    </div>
    <div class="header__user-account">
      <i class="fas fa-user"></i>
      <div class="header__user-box account__box">
        <ul class="account__box-menu">
          <li>
            <a href="./index.php?page=account&act=login"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
          </li>
          <li>
            <a href="./index.php?page=account&act=register"><i class="fas fa-user"></i>Đăng ký</a>
          </li>
          <li>
            <a href="#"><i class="far fa-heart"></i>Yêu thích</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header__user-bag">
      <i class="fas fa-shopping-bag"> </i>
      <div class="header__user-box shopping__bag">
        <p>Giỏ hàng đang trống!</p>
      </div>
    </div>
    <div class="header__user-menu mobile-menu">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</header>