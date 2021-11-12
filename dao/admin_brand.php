<?php
require_once "pdo.php";

// lấy danh sách thương hiệu brand
function brand_listall(){
    $sql = "SELECT * FROM brand";
    return pdo_query($sql);
}

// thêm mới brand
function brand_add($name_brand, $hide, $location){
    $sql = "INSERT INTO brand(name_brand, hide, location) VALUES(?,?,?)";
    pdo_execute($sql, $name_brand, $hide, $location);
}

// xoá brand
function brand_delete($id_brand){
    $sql = "DELETE FROM brand WHERE id_brand=?";
    pdo_execute($sql, $id_brand);
}

// load dữ liệu lên khi click vào sửa
function brand_loaddata($id_brand){
    $sql = "SELECT * FROM brand WHERE id_brand=?";
    return pdo_query_one($sql, $id_brand);
}

// cập nhật brand
function brand_update($name_brand, $hide, $location, $id_brand){
    $sql = "UPDATE brand SET name_brand=?, hide=?, location = ? WHERE id_brand=?";
    pdo_execute($sql, $name_brand, $hide, $location, $id_brand);
}
?>