<?php
require_once "pdo.php";

// add bill 
function cart_add($last_name, $first_name, $email, $phone, $address, $note, $status, $id_user)
{
    $sql = "INSERT INTO bill(`date`, last_name, first_name, email, phone_number, 
    `address`, `status`, note, hide, id_user)
    VALUES (now(), '$last_name', '$first_name','$email','$phone','$address','$status','$note', 1, $id_user)";
    $conn = pdo_get_connection();
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}
function cart_add_billdetal($name_product, $number, $price, $thanhtien, $id_bill)
{
    $sql = "INSERT INTO bill_detail(name_product, number, price, thanhtien, id_bill) 
    VALUES ('$name_product', $number, $price, $thanhtien, $id_bill)";
    pdo_execute($sql);
}

function cart_selectallproduct($id_bill)
{
    $sql = "SELECT * FROM bill_detail WHERE id_bill=?";
    return pdo_query($sql, $id_bill);
}

// lấy hình ảnh thông qua
function mycart_selectall($id_user)
{
    $sql = "SELECT * FROM bill WHERE id_user = ?";
    return pdo_query($sql, $id_user);
}
// lấy tổng số lượng đơn hàng
function mycart_getCount($id_bill)
{
    $sql = "SELECT SUM(number) as tongsoLuong FROM bill_detail WHERE id_bill = ?";
    $getCount =  pdo_query_one($sql, $id_bill);
    return $getCount['tongsoLuong'];
}

// lấy toognr tiền đơn hàng
function mycart_getTotal($id_bill)
{
    $sql = "SELECT SUM(thanhtien) as tongthanhTien FROM bill_detail WHERE id_bill = ?";
    $getCount =  pdo_query_one($sql, $id_bill);
    return $getCount['tongthanhTien'];
}
