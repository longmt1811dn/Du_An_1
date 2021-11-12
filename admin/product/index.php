<?php
require_once "../../global.php";
require_once "../../dao/admin_product.php";

if (exist_param("listproduct")) {
    $listOb = product_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("addpro")) {
    $name_product = $_POST['name_product'];
    $price = $_POST['price'];
    $describe = $_POST['describe'];
    $content = $_POST['content'];
    $size = $_POST['size'];
    $target_dir = "Du_An_1/assets/image/";
    $targer_file = $target_dir . basename($_FILES['url_product']['name']);
    settype($size, "int");
    $material = $_POST['material'];
    $highlights = $_POST['highlights'];
    $promotion = $_POST['promotion'];
    $hide = $_POST['hide'];
    settype($hide, "int");
    $id_type_brand = $_POST['id_type-brand'];
    product_add($name_product, $price, $describe, $content, $size, $targer_file, $material, $highlights, $promotion, $hide,  $id_type_brand);
    $VIEW_NAME = "add.php";
} else {
    $VIEW_NAME = "add.php";
}

require_once "../index.php";
