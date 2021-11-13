<?php
require_once "pdo.php";

// lấy tổng tất cả review
function review_countAll(){
    $sql = "SELECT COUNT(*) as 'soLuong' FROM review";
    return pdo_query($sql);
}
?>