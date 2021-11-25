<?php
if (isset($_GET['logout'])) {
  unset($_SESSION['users']);
  echo '<script>alert("Bạn đã đăng xuất"); window.location="./index.php";</script>';
}
?>
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
      <?php if (isset($_SESSION['users'])) {
        extract($_SESSION['users']); ?>
        <div class="header__user-box account__box">
          <ul class="account__box-menu">
            <li>
              <i class="far fa-user-circle"></i>Xin chào <span style="color: red;"><?= $last_name ." ". $first_name ?></span>
            </li>
            <li>
              <i class="fas fa-user"></i><a href="./index.php?page=account&act=profile">Hồ sơ</a>
            </li>
            <li>
              <a href="./index.php?page=account&act=love"></i><i class="far fa-heart"></i>Yêu thích</a>
            </li>
            <li>
              <a href="./admin/login"><i class="fas fa-house-user"></i>Quản trị</a>
            </li>
            <li>
              <i class="fas fa-sign-in-alt"></i><a href="./index.php?logout">Thoát</a>
            </li>
          </ul>
        </div>
      <?php } else { ?>
        <div class="header__user-box account__box">
          <ul class="account__box-menu">
            <li>
              <a href="./index.php?page=account&act=login"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
            </li>
            <li>
              <a href="./index.php?page=account&act=register"><i class="fas fa-user"></i>Đăng ký</a>
            </li>
            <li>
              <a href="./admin/login"><i class="fas fa-house-user"></i>Quản trị</a>
            </li>
          </ul>
        </div>
      <?php } ?>
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