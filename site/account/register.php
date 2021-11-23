<?php
require_once "./dao/pdo.php";
require_once "./dao/admin_users.php";
if (isset($_SESSION['users'])) {
  echo '<script>window.location="./index.php";</script>';
}
if (isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $pass = md5($password);
  // kiểm tra sự tồn tại email hoặc user trong phần đăng ký tài khoản
  $kiemtra = users_checkEmailOrUsername($email, $username);
  if (strlen($first_name) == "" && strlen($first_name) <= 1) {
    $thongbao =  "Họ không được để trống và dưới 1 kí tự";
  } else if (strlen($first_name) == "" && strlen($last_name) <= 1) {
    $thongbao =  "Tên không được để trống và dưới 1 kí tự";
  } else if (strlen($username) <= 6) {
    $thongbao =  "Username không được dưới 6 kí tự";
  } else if (strlen($pass) <= 6) {
    $thongbao =  "Password không được dưới 6 kí tự";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $thongbao =  "Email định dạng sai";
  } else if ($kiemtra) {
    $thongbao =  "Username hoặc email đã có người sử dụng";
  } else {
      $key_actived = bin2hex(random_bytes(16));
      $conn = pdo_get_connection();
      $sql = "INSERT INTO users(account, first_name, last_name, email, pass, key_actived) VALUES(?,?,?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$username, $first_name, $last_name, $email, $pass, $key_actived]);
      send_mail_verifile($email, $key_actived);
      echo "<script>alert('Đăng ký thành công, vui lòng kiểm tra email để kích hoạt tài khoản')</script>";
  }
}
?>
<main class="main">
  <nav class="collection__nav">
    <div class="collection__nav-text center-center">
      <h1>Đăng ký</h1>
      <a href="index.html" class="text__gray">Trang chủ </a><span class="text__gray">/</span>
      <span class="text__gray">Đăng ký</span>
    </div>
  </nav>
  <div class="login__form">

    <form action="" class="login__form-control" method="post">
      <div class="thongbao">
        <?php echo "<p>" . $thongbao . "</p>" ?>
      </div>
      <div class="login__control-input">
        <input type="text" class="input__control" placeholder="Họ" name="first_name" />
      </div>

      <div class="login__control-input">
        <input type="text" class="input__control" placeholder="Tên" name="last_name" />
      </div>
      <div class="login__control-input">
        <input type="text" class="input__control" placeholder="Tài khoản" name="username" />
      </div>
      <div class="login__control-input">
        <input type="email" class="input__control" placeholder="Email" name="email" />
      </div>

      <div class="login__control-input">
        <input type="password" class="input__control" placeholder="Mật khẩu" name="pass" />
      </div>
      <div class="login__control-button">
        <button type="submit" name="submit" class="btn">Đăng ký</button>
        <a href="index.php" class="login__control-text border-bot">Trở về trang chủ</a>
      </div>

    </form>

  </div>
</main>