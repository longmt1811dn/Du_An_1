<?php
if (isset($_GET['email']) && isset($_GET['key_actived'])) {
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM users WHERE email = ? AND key_actived = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_GET['email'], $_GET['key_actived']]);
    $kiemtra = $stmt->rowCount();
    if ($kiemtra == 1) {
        $sql = "UPDATE users SET key_actived = NULL, verifile = 1 WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_GET['email']]);
        echo "<script>alert('Kích hoạt tài khoản thành công');  window.location='index.php'; </script>";
    }else{
        echo "<script>alert('Đường dẫn sai hoặc đã hết hạn sử dụng');  window.location='index.php'; </script>";
    }
}
