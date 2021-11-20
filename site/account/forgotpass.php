<?php
require_once "./dao/pdo.php";
require_once "./dao/admin_users.php";
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $checkEmail = $stmt->rowCount();
    if ($checkEmail == 1) {
        $token = bin2hex(random_bytes(16));
        $congngay = strtotime("+3 Days");
        $date = date("Y-m-d", $congngay);
        $_SESSION['date'] = $date;
        $sql = "UPDATE users SET token = ?, date = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$token, $_SESSION['date'], $email]);
        send_mail($email, $token);
        echo "<script>alert('Kiểm tra đường dẫn trong email')</script>";
    } else {
        echo "<script>alert('Email không có đăng ký')</script>";
    }
} ?>
<div class="forgotpass">
    <div class="box-forgotpass">
        <div class="text-forgotpass">
            <h2>Quên mật khẩu?</h2>
        </div>
        <div class="text-small-forgotpass">
            <p>Vui lòng nhập email để đặt lại mật khẩu của bạn</p>
        </div>
        <form action="" class="form-forgotpass" method="post">
            <div class="form-group_forgotpass">
                <input type="email" id="email" name="email" placeholder="Email của bạn">
            </div>
            <div class="form-submit-forgotpass">
                <button> <a href="./index.php">Huỷ</a></button>
                <button class="button-forgotpass" type="submit" name="submit">Gửi</button> <br />
            </div>
        </form>
    </div>
</div>