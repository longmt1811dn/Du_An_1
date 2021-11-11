<?php
require_once "pdo.php";

// danh sách object
function Object_listall()
{
    $sql = "SELECT * FROM object ORDER BY id_object";
    return pdo_query($sql);
}
// thêm tên loại (Object)
function object_add($name_object, $hide, $location)
{
    $sql = "INSERT INTO object(name_object, hide, location) VALUES (?,?,?) ";
    pdo_execute($sql, $name_object, $hide, $location);
}
// Xoá object
function object_delete($id_object){
    $sql = "DELETE FROM object WHERE id_object = ?";
    pdo_execute($sql, $id_object);
}
// load lên dữ liệu khi ấn vào sửa
function object_loaddata($id_object){
    $sql = "SELECT * FROM object WHERE id_object=?";
    return pdo_query_one($sql, $id_object);
}
// cập nhật lại Object
function object_update($name_object, $hide, $location , $id_object){
    $sql = "UPDATE object SET name_object = ?, hide = ?, location = ? WHERE id_object=?";
    pdo_execute($sql, $name_object, $hide, $location , $id_object);
}