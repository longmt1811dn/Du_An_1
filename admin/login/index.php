<?php
if(isset($_GET['act'])) $act =$_GET['act'];
    
if($act == ""){
    
session_start();

if(isset($_POST['btn'])){
    $u = trim(strip_tags($_POST['u']));
    $p = trim(strip_tags($_POST['p']));
        
    require_once '../../dao/pdo.php';
    $conn = pdo_get_connection();
    $sql = "SELECT `id_user`, `account`, `last_name`, `first_name`, `email`, `pass`, `role`, `activated` FROM `users` WHERE account = '{$u}'";
    $kq = $conn->query($sql);
        
    if($kq->rowCount() == 0){
        $_SESSION['thongbao'] = "TÊN ĐĂNG NHẬP NÀY KHÔNG TỒN TẠI";
        header("location: ../index.php");
        exit();
    }
        
    $sql = "SELECT `id_user`, `account`, `last_name`, `first_name`, `email`, `pass`, `role`, `activated` FROM `users` WHERE account = '{$u}' AND pass = '{$p}'";
    $kq = $conn->query($sql);
        
    if($kq->rowCount() == 0){
        $_SESSION['thongbao'] = "MẬT KHẨU KHÔNG ĐÚNG";
        header("location: ../index.php");
        exit();
    }
        
    $sql = "SELECT `id_user`, `account`, `last_name`, `first_name`, `email`, `pass`, `role`, `activated` FROM `users` WHERE account = '{$u}' AND pass = '{$p}' AND role = 1";
    $kq = $conn->query($sql);
        
    if($kq->rowCount() == 0){
        $_SESSION['thongbao'] = "TÀI KHOẢN NÀY KHÔNG CÓ QUYỀN ADMIN";
        header("location: ../index.php");
        exit();
    }
        
    $row_user = $kq->fetch();
    unset($_SESSION['thongbao']);
    $_SESSION['login_id_admin'] = $row_user['id_user'];
    $_SESSION['login_admin'] = $row_user['account'];
    $_SESSION['login_group'] = $row_user['role'];
    header("location: ../index.php");
}
    require_once './login_admin.php';
}
elseif ($act == "logout") {
session_start();

    unset($_SESSION['login_id_admin']);
    unset($_SESSION['login_admin']);
    unset($_SESSION['login_group']);
    
    header("location: ../index.php");//chuyển đến trang nào tùy ý
}
?>