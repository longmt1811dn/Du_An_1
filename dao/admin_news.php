<?php
require_once "pdo.php";

// lấy tổng bài viết
function news_countAll(){
    $sql = "SELECT COUNT(*) as 'soLuong' FROM news";
    return pdo_query($sql);
}
?>