<?php
require_once "./dao/admin_users.php";
if (isset($_SESSION['users'])) {
  echo '<script>window.location="./index.php";</script>';
}
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $pass = md5($password);
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
    </div>
  </nav>

  <div class="login__form">
    <form action="" class="login__form-control" method="post">
      <div class="login__control-input">
        <input type="email" class="input__control" placeholder="Email" name="email" />
      </div>

      <div class="login__control-input">
        <input type="password" class="input__control" placeholder="Mật khẩu" name="pass" />
      </div>

      <a href="?page=account&act=forgotpass" class="login__control-text">Quên mật khẩu?</a>
      <div class="login__control-button">
        <button type="submit" name="submit" class="btn">Đăng nhập</button>
        <a href="index.php?page=account&act=register">
          <p class="login__control-text border-bot">Tạo tài khoản</p>
        </a>
        <a href="index.html" class="login__control-text">Trở về trang chủ</a>
      </div>
    </form>
  </div>
</main>