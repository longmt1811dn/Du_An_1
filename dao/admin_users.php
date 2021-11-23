<?php
session_start();
require_once "pdo.php";
function users_one($idUser)
{
    $sql = "SELECT * FROM `users` WHERE id_user = ?";
    return pdo_query_one($sql, $idUser);
}

// lấy tổng tài khoản
function users_countAll()
{
    $sql = "SELECT COUNT(*) 'soLuong' FROM `users` WHERE `activated` = 1";
    return pdo_query($sql);
}

// list danh sách tài khoản
function users_listall()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}
// load dữ liệu khi click vào sửa
function users_loaddata($id_user)
{
    $sql = "SELECT * FROM users WHERE id_user = ?";
    return pdo_query_one($sql, $id_user);
}

// cập nhật user
function  users_update($account, $password, $first_name, $last_name, $email, $activated, $role, $id_user)
{
    $sql = "UPDATE users SET account = ?, pass = ?, first_name=?, last_name=?, email=?, activated = ?, role = ? WHERE id_user = ?";
    pdo_execute($sql, $account, $password, $first_name, $last_name, $email, $activated, $role, $id_user);
}

// xoá user
function users_delete($id_user)
{
    $sql = "DELETE FROM users WHERE id_user = ?";
    pdo_execute($sql, $id_user);
}

//Lay name user
function users_name($idUsers)
{
    $sql = "SELECT * FROM users WHERE id_user = ?";
    $row = pdo_query_one($sql, $idUsers);

    return $row['last_name'] . ' ' . $row['first_name'];
}

// gửi email
function  send_mail($email, $token)
{
    require "./PHPMailer-master/PHPMailer-master/src/PHPMailer.php";
    require "./PHPMailer-master/PHPMailer-master/src/SMTP.php";
    require './PHPMailer-master/PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'tienjerry2000@gmail.com'; // SMTP username
        $mail->Password = '01663261181';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('tienjerry2000@gmail.com', 'TimeZee');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Khôi phục mật khẩu tài khoản';
        $noidungthu = 'Xin chào bạn, <br><br> 
        Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi, để hoàn tất việc khôi phục tài khoản<br>
        Bạn vui lòng nhấp vào liên kết này để đặt lại mật khẩu của bạn:<br><br>
        <a href="http://localhost/Du_An_1_MaiTieuLong/Du_An_1/index.php?page=account&act=resert-pass&email=' . $email . '&token=' . $token . '">Cập nhật lại mật khẩu cho tài khoản</a> <br><br>
        Lưu ý: Liên kết này sẽ chỉ hoạt động trong 3 ngày từ hôm nay đến hết ngày ' . date("d-m-Y", strtotime($_SESSION["date"])) . ' và chỉ có thể dùng được một lần.<br><br>
        Cảm ơn bạn!';
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
// đăng ký tài khoản
// function users_register($username, $first_name, $last_name, $email, $pass)
// {

//     $sql = "INSERT INTO users(account, first_name, last_name, email, pass, key_actived) VALUES(?,?,?,?,?, $key_actived)";
//     pdo_execute($sql, $username, $first_name, $last_name, $email, $pass);
// }
// Kiểm tra sự tồn tại của một user hoặc email
function users_checkEmailOrUsername($email, $username)
{
    $sql = "SELECT * FROM users WHERE email = ? OR account = ?";
    return pdo_query_one($sql, $email, $username);
}
// Kiểm tra sự tồn tại của một email và password
function users_checkEmailandPassword($email, $pass)
{
    $sql = "SELECT * FROM users WHERE email = ? AND pass = ? AND verifile = 1";
    return pdo_query_one($sql, $email, $pass);
}
// Kiểm tra sự tồn tại của một account chưa được kích hoạt 
function users_checkVerifile($email){
    $sql = "SELECT * FROM users WHERE email = ? AND verifile = 0";
    return pdo_query_one($sql, $email);
}
function send_mail_verifile($email, $key_actived)
{
    require "./PHPMailer-master/PHPMailer-master/src/PHPMailer.php";
    require "./PHPMailer-master/PHPMailer-master/src/SMTP.php";
    require './PHPMailer-master/PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'tienjerry2000@gmail.com'; // SMTP username
        $mail->Password = '01663261181';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('tienjerry2000@gmail.com', 'TimeZee');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Kích hoạt tài khoản';
        $noidungthu = 'Xin chào bạn, <br><br> 
        Cảm ơn bạn đã đăng ký thành viên với chúng tôi, vui lòng nhấp vào link bên dưới kích hoạt tài khoản để trải nghiệm tốt hơn:<br>
        Bạn vui lòng nhấp vào liên kết này để đặt lại mật khẩu của bạn:<br><br>
        <a href="http://localhost/DUAN1_LEXUANPHAT/Du_An_1/index.php?page=account&act=checkverifile&email=' . $email . '&key_actived=' . $key_actived . '">Kích hoạt tài khoản cá nhân</a> <br><br>
        Lưu ý: Liên kết chỉ có thể dùng được một lần.<br><br>
        Cảm ơn bạn!';
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
