<?php

// thêm mới like product
function like_product_add($idProduct, $idUser)
{
    $sql = "INSERT INTO `like_product`(`id_product`, `id_user`) VALUES (?, ?)";
    pdo_execute($sql, $idProduct, $idUser);
}

// xóa like product
function like_product_del($idProduct, $idUser)
{
    $sql = "DELETE FROM `like_product` WHERE id_product = ? AND id_user = ?";
    pdo_execute($sql, $idProduct, $idUser);
}

// lấy like product theo tài khoản
function like_productIdUser($idUser)
{
    $sql = "SELECT * FROM `like_product` WHERE id_user = ?";
    
    return pdo_query($sql, $idUser);
}

?>