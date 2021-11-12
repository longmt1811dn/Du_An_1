<?php
require_once "pdo.php";

// danh sách object
function product_listall()
{
    $sql = "SELECT * FROM product";
    return pdo_query($sql);
}

// lấy tên type trong product
function product_getNameType($id_type)
{
    $sql = "SELECT name_type FROM type WHERE id_type = ?";
    $nameType = pdo_query_one($sql, $id_type);
    return $nameType['name_type'];
}

// lấy tên brand trong product
function product_getNameBrand($id_brand)
{
    $sql = "SELECT name_brand FROM brand WHERE id_brand = ?";
    $nameBrand = pdo_query_one($sql, $id_brand);
    return $nameBrand['name_brand'];
}

// 
function product_getAllTypeBrand()
{
    $sql = "SELECT * FROM type_brand";
    return pdo_query($sql);
}

// thêm mới product
function product_add($name_product, $price, $describe, $content, $size, $targer_file ,$material, $highlights, $promotion, $hide,  $id_type_brand)
{
    $sql = "INSERT INTO product (`name_product`, `price`, `describe`, `content`, `size`,`image`,`material`, `date`,  `highlights`, `promotion`, `hide`, `id_type_brand`) VALUES(?,?,?,?,?,?,?,now(),?,?,?,?)";
    pdo_execute($sql, $name_product, $price, $describe, $content, $size, $targer_file, $material, $highlights, $promotion, $hide,  $id_type_brand);
}
