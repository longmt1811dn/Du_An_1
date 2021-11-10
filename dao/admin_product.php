<?php
require_once "pho.php";

// danh sách object
function product_listall(){
    $sql = "SELECT * FROM product";
    return pdo_query($sql);
}
