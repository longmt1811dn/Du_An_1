<?php
require_once "pdo.php";

// lấy tổng tất cả review
function review_countAll(){
    $sql = "SELECT COUNT(*) as 'soLuong' FROM review";
    return pdo_query($sql);
}

// lấy danh sách review gọp nhóm theo sản phẩm
function review_list(){
    $sql = "SELECT id_product, COUNT(id_review) as number FROM review GROUP BY id_product";
    
    return pdo_query($sql);
}

// Lấy review theo id_product
function review_list_id_product($id_product){
    $sql = "SELECT * FROM review WHERE id_product = ?";
    
    return pdo_query($sql, $id_product);
}
?>