<?php
require_once "./dao/pdo.php";
require_once "./dao/admin_users.php";
if (isset($_GET['email']) && isset($_GET['token'])) {
    $date = date("Y-m-d");
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM users WHERE email = ? AND token = ? AND `date` BETWEEN ? AND ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_GET['email'], $_GET['token'], $date, $_SESSION['date']]);
    $kiemtra = $stmt->rowCount();
    if ($kiemtra == 1) {
        echo '<div class="forgotpass">
        <div class="box-forgotpass">
            <div class="text-forgotpass">
                <h2>Cập nhật mật khẩu</h2>
            </div>
            <form action="" class="form-forgotpass" method="post">
                <div class="form-group_forgotpass">
                    <input type="password" id="password" name="password" placeholder="Mật khẩu mới">
                </div>
                <div class="form-submit-forgotpass">
                    <input type="hidden" name="email" value="' . $_GET['email'] . '">
                    <button class="button-forgotpass" type="submit" name="submit">Đồng ý</button> <br />
                </div>
            </form>
        </div>
    </div>';
    } else {
        echo "<script>alert('Đường dẫn hết hạn hoặc sai');  window.location='index.php'; </script>";
    }
}
?>
<?php
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET pass = ?, token = NULL, date = NULL WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$password, $email]);
    echo "<script>alert('Cập nhật mật khẩu thành công');  window.location='index.php'; </script>";
}
