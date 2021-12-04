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

// Hiển thị nút tim sản phẩm
function like_product_btn($idProduct){
    $conn = pdo_get_connection();
    
    if(isset($_SESSION['login_id'])){   
        $sql = "SELECT * FROM like_product WHERE id_product = {$idProduct} AND id_user = {$_SESSION['login_id']}";
        $kq = $conn->query($sql);

        if ($kq->rowCount() != 0) {
            echo "<a href='index.php?page=product&act=al&id=". $idProduct ."' class='compare' style='background-color: red' title='Add to wishlist'><i class='fas fa-heart'></i></a>";
        } else {
            echo "<a href='index.php?page=product&act=al&id=". $idProduct ."' class='compare' title='Add to wishlist'><i class='fas fa-heart'></i></a>";
        }
    } else {
        echo "<a href='index.php?page=product&act=al&id=". $idProduct ."' class='compare' title='Add to wishlist'><i class='fas fa-heart'></i></a>";
    }
    
}

function like_product_detail($idProduct){
    $conn = pdo_get_connection();
    
    if(isset($_SESSION['login_id'])){   
        $sql = "SELECT * FROM like_product WHERE id_product = {$idProduct} AND id_user = {$_SESSION['login_id']}";
        $kq = $conn->query($sql);

        if ($kq->rowCount() != 0) {
            echo "<a href='index.php?page=product&act=al&id=". $idProduct ."' class='compare'  title='Add to wishlist'><i style='color: #f34d4d; font-size: 3rem;' class='fas fa-heart'></i></a>";
        } else {
            echo "<a href='index.php?page=product&act=al&id=". $idProduct ."' class='compare' title='Add to wishlist'><i style='font-size: 3rem;' class='fas fa-heart'></i></a>";
        }
    } else {
        echo "<a href='index.php?page=product&act=al&id=". $idProduct ."' class='compare' title='Add to wishlist'><i style='font-size: 3rem;' class='fas fa-heart'></i></a>";
    }
    
}
