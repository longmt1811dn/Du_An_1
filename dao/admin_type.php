<?php
require_once "pdo.php";

// lấy danh sách type
function type_listall(){
$sql = "SELECT * FROM type";
return pdo_query($sql);
}

// lấy tên object trong danh sách type
function type_getNameObject($id_object){
    $sql = "SELECT name_object FROM object WHERE id_object = ?";
    $getNameOb =  pdo_query_one($sql, $id_object);
    return $getNameOb['name_object'];
}

// lấy option Object của Type
function type_getNameObject_option(){
    $sql = "SELECT * FROM object";
    return pdo_query($sql);
} 

// thêm mới type
function type_add($name_type, $hide, $location, $id_object){
    $sql = "INSERT INTO type(name_type, hide, location, id_object) VALUES(?,?,?,?)";
    pdo_execute($sql, $name_type, $hide, $location, $id_object);
}

// Xoá type
function type_delete($id_type){
    $sql = "DELETE FROM type WHERE id_type = ?";
    pdo_execute($sql, $id_type);
}

// load dữ liệu lên khi click vào nút sửa
function type_loaddata($id_type){
    $sql = "SELECT * FROM type WHERE id_type = ?";
    return pdo_query_one($sql, $id_type);
}

// cập nhật lại type
function type_update($name_type, $hide, $location, $id_object, $id_type){
    $sql = "UPDATE type SET name_type = ?, hide = ?, location = ?, id_object = ? WHERE id_type=?";
    pdo_execute($sql, $name_type, $hide, $location, $id_object, $id_type);
}