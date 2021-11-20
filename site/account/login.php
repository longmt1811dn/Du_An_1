<?php
require_once "./dao/admin_users.php";
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $kiemtra = users_checkEmailandPassword($email, $pass);
  if (is_array($kiemtra)) {
    $_SESSION['users'] = $kiemtra;
    echo '<script>alert("Bạn đã đăng nhập thành công"); window.location="./index.php";</script>';
  } else {
    echo "<script>alert('Sai tài khoản hoặc mật khẩu')</script>";
  }
}
?>
<main class="main">
  <nav class="collection__nav">
    <div class="collection__nav-text center-center">
      <h1>Tài khoản</h1>
      <a href="index.html" class="text__gray">Trang chủ </a><span class="text__gray">/</span>
      <span class="text__gray">Tài khoản</span>
    </div>
  </nav>

<<<<<<< HEAD
  <div class="login__container">
    <div class="login__form" id="form_login">
      <h1 class="h1__name-big">Đăng nhập</h1>
      <form action="" class="login__form-control">
        <div class="login__control-input">
          <input type="email" class="input__control" placeholder="Email" />
        </div>

        <div class="login__control-input">
          <input type="password" class="input__control" placeholder="Password" />
        </div>

        <p class="login__control-text" id="switch__forgot_pass">Quên mật khẩu?</p>
        <div class="login__control-button">
          <button type="submit" class="btn">Đăng nhập</button>
          <p class="login__control-text border-bot">Tạo tài khoản</p>
          <a href="index.html" class="login__control-text">Trở về trang chủ</a>
        </div>
      </form>
    </div>

    <div class="forgot_password__form" id="form_pass">
      <h1 class="h1__name-big">Đặt lại mật khẩu</h1>
      <span class="forgot_password__form-sub p__sub-text">Chúng tôi sẽ gửi email để đặt lại mật khẩu </span>
      <form action="" class="login__form-control">
        <div class="login__control-input">
          <input type="email" class="input__control" placeholder="Email" />
        </div>

        <div class="login__control-button">
          <button type="submit" class="btn">Gửi</button>
        </div>
        <p class="login__control-text" id="switch__login">Hủy</p>
      </form>
    </div>
=======
  <div class="login__form">
    <form action="" class="login__form-control" method="post">
      <div class="login__control-input">
        <input type="email" class="input__control" placeholder="Email" name="email" />
      </div>

      <div class="login__control-input">
        <input type="password" class="input__control" placeholder="Password" name="pass" />
      </div>

      <a href="?page=account&act=forgotpass" class="login__control-text">Quên mật khẩu?</a>
      <div class="login__control-button">
        <button type="submit" name="submit" class="btn">Đăng nhập</button>
        <p class="login__control-text border-bot">Create Tài khoản</p>
        <a href="index.html" class="login__control-text">Trở về trang chủ</a>
      </div>
    </form>
>>>>>>> BE
  </div>
</main>
<script src="assets/js/switch__forgot_pass.js"></script>