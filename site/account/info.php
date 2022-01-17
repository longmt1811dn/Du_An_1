<?php
require_once "./dao/admin_users.php";
if (isset($_POST['submit-capnhat'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $account = $_POST['account'];
  $email = $_POST['email'];
  $id_user = $_POST['id_user'];
  users_updateinfo($first_name, $last_name, $account, $email, $id_user);
  echo '<script>alert("Cập nhật hồ sơ thành công"); window.location="index.php?page=account&act=profile";</script>';
}
?>
<main class="main">
  <nav class="collection__nav">
    <div class="collection__nav-text center-center">
      <h1>Thông tin tài khoản</h1>
    </div>
  </nav>

  <div class="account__container">
    <div class="account__container-box">

      <div class="account__box-img">
        <img src="./assets/image/users/Avt_User.png" alt="" width="100%">
      </div>

      <div class="account__box-detail">
        <form action="" class="login__form-control account__detail-form" method="post">
          <div class="login__control-input account__form-input">
            <p>Họ</p>
            <input type="text" class="input__control" value="<?= $item['first_name'] ?>" name="first_name" />
          </div>
          <div class="login__control-input account__form-input">
            <p>Tên</p>
            <input type="text" class="input__control" value="<?= $item['last_name'] ?>" name="last_name" />
          </div>
          <div class="login__control-input account__form-input">
            <p>Tài khoản</p>
            <input type="text" class="input__control" value="<?= $item['account'] ?>" name="account" />
          </div>
          <div class="login__control-input">
            <p>Email</p>
            <input type="email" class="input__control" value="<?= $item['email'] ?>" name="email" />
          </div>
          <div class="login__control-input">
            <input type="hidden" name="id_user" value="<?= $item['id_user'] ?>">
            <input type="submit" class="input__control" value="Cập nhật" name="submit-capnhat" />
          </div>
        </form>
      </div>
    </div>
  </div>
</main>