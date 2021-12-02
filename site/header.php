<?php
if (isset($_GET['logout'])) {

  unset($_SESSION['users']);
  unset($_SESSION['login_id']);

  echo '<script>alert("Bạn đã đăng xuất"); window.location="./index.php";</script>';
}
?>
<header class="header grid-container" id="header">
  <div class="header__logo">
    <a href="index.php">
      <img src="./assets/image/logo.png" alt="" /></a>
  </div>

  <!-- Menu Header -->
  <?php require_once './site/menu.php'; ?>

  <div class="header__user">
    <div class="header__user-find">
        <!--href="index.php?page=product&act=find"-->
      <a style="cursor:pointer" onclick="openNav()">
        <i class="fas fa-search"></i></a>
    </div>
    <div class="header__user-account">
      <i class="fas fa-user" id="header__user-account"></i>
      <?php if (isset($_SESSION['users'])) {
        extract($_SESSION['users']); ?>
        <div class="header__user-box account__box" id="account__box">
          <i class="fas fa-times close__account-box"></i>
          <ul class="account__box-menu">
            <li>
              <i class="far fa-user-circle"></i>Xin chào <span style="color: red;"><?= $last_name . " " . $first_name ?></span>
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
        <div class="header__user-box account__box" id="account__box">
          <i class="fas fa-times close__account-box"></i>
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
      
      <a href="?page=account&act=cart">
        <i class="fas fa-shopping-bag"> </i>
        <div class="header__user-box shopping__bag">
          <?php if (isset($_SESSION['users'])) { ?>
          <p>Giỏ hàng đang trống!</p>
         
          <?php }else {
            echo "<p>Đăng nhập để xem giỏ hàng</p>";

          } ?>  
          
        </div>
      </a>
    </div>
    <div class="header__user-menu mobile__menu">
      <i class="fas fa-bars" id="open__menudropdown"></i>
      <div class="mobile__menu-dropdown" id="mobile__menu-dropdown">
        <i class="fas fa-times close__account-box"></i>
        <nav class="mobile__nav">
          <ul class="menu">
            <li class="menu-item">
              <a class="menu-link" href="index.php">Trang chủ</a>
            </li>

            <li class="menu-item has-child">
              <a href="#" class="menu-link">
                Đồng hồ V
              </a>
              <ul class="menu-child">
                <li class="menu-child-item">
                  <a href="#" class="menu-child-link">Child</a>
                </li>
                <li class="menu-child-item">
                  <a href="#" class="menu-child-link">Child</a>
                </li>
                <li class="menu-child-item">
                  <a href="#" class="menu-child-link">Child</a>
                </li>
              </ul>
            </li>
            <li class="menu-item has-child">
              <a href="#" class="menu-link">
                Đồng hồ V

              </a>
              <ul class="menu-child">
                <button class="btn">
                  <a href="">Sương sương</a>
                </button>
                <li class="menu-child-item">
                  <a href="#" class="menu-child-link">Child</a>
                </li>
                <li class="menu-child-item">
                  <a href="#" class="menu-child-link">Child</a>
                </li>
                <li class="menu-child-item">
                  <a href="#" class="menu-child-link">Child</a>
                </li>
              </ul>
            </li>
          </ul>

        </nav>
      </div>
    </div>
  </div>
</header>