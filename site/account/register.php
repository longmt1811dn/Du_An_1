<?php
require_once "./dao/admin_users.php";
if(isset($_SESSION['users'])){
  echo '<script>window.location="./index.php";</script>';
}
if (isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $pass = md5($password);
  // 
  $kiemtra = users_checkEmailOrUsername($email, $username);
  if (strlen($first_name) <= 1) {
    $thongbao =  "Họ không được dưới 1 kí tự";
  } else if (strlen($last_name) <= 1) {
    $thongbao =  "Tên không được dưới 1 kí tự";
  } else if (strlen($username) <= 6) {
    $thongbao =  "Username không được dưới 6 kí tự";
  } else if (strlen($pass) <= 6) {
    $thongbao =  "Password không được dưới 6 kí tự";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $thongbao =  "Email định dạng sai";
  } else if ($kiemtra) {
    $thongbao =  "Username hoặc email đã có người sử dụng";
  } else {
    users_register($username, $first_name, $last_name, $email, $pass);
    print_r($_POST);
    $thongbao = "Đăng ký thành công";
  }
}
?>
<main class="main">
  <nav class="collection__nav">
    <div class="collection__nav-text center-center">
      <h1>Create Account</h1>
      <a href="index.html" class="text__gray">Home </a><span class="text__gray">/</span>
      <span class="text__gray">Create Account</span>
    </div>
  </nav>
  <div class="login__form">

    <form action="" class="login__form-control" method="post">
      <div class="thongbao">
        <?php echo "<p>" . $thongbao . "</p>" ?>
      </div>
      <div class="login__control-input">
        <input type="text" class="input__control" placeholder="First Name" name="first_name" />
      </div>

      <div class="login__control-input">
        <input type="text" class="input__control" placeholder="Last Name" name="last_name" />
      </div>
      <div class="login__control-input">
        <input type="text" class="input__control" placeholder="Username" name="username" />
      </div>
      <div class="login__control-input">
        <input type="email" class="input__control" placeholder="Email" name="email" />
      </div>

      <div class="login__control-input">
        <input type="password" class="input__control" placeholder="Password" name="pass" />
      </div>
      <div class="login__control-button">
        <button type="submit" name="submit" class="btn">CREAT</button>
        <a href="index.html" class="login__control-text border-bot">Return to Store</a>
      </div>

    </form>

  </div>
</main>