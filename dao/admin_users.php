<?php
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
function users_loaddata($id_user){
    $sql = "SELECT * FROM users WHERE id_user = ?";
    return pdo_query_one($sql, $id_user);
}

// cập nhật user
function  users_update($account, $password, $first_name, $last_name, $email, $activated, $role, $id_user){
    $sql = "UPDATE users SET account = ?, pass = ?, first_name=?, last_name=?, email=?, activated = ?, role = ? WHERE id_user = ?";
    pdo_execute($sql, $account, $password, $first_name, $last_name, $email, $activated, $role, $id_user);
}

// xoá user
function users_delete($id_user){
    $sql = "DELETE FROM users WHERE id_user = ?";
    pdo_execute($sql, $id_user);
}

//Lay name user
function users_name($idUsers){
    $sql = "SELECT * FROM users WHERE id_user = ?";
    $row = pdo_query_one($sql, $idUsers);
    
    return $row['last_name'] . ' ' . $row['first_name'];
}