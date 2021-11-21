<?php
require_once "../../global.php";
require_once "../../dao/admin_product.php";
require_once '../../dao/admin_brand.php';
require_once '../../dao/admin_type.php';
require_once '../../dao/admin_type_brand.php';

if (exist_param("listproduct")) {
    $listOb = product_listall();
    
    $VIEW_NAME = "list.php";
} else if (exist_param("addpro")) {
    $name_product = $_POST['name_product'];
    $price = $_POST['price'];
    $describe = $_POST['describe'];
    $content = $_POST['content'];
    $size = $_POST['size'];
    
    $target_dir = "assets/image/products/";
    $targer_file = $target_dir . basename($_FILES['url_product']['name']);
    
    move_uploaded_file($_FILES["url_product"]["tmp_name"], '../../' . $targer_file);
    
    settype($size, "int");
    $material = $_POST['material'];
    $highlights = $_POST['highlights'];
    $promotion = $_POST['promotion'];
    $hide = $_POST['hide'];
    
    settype($hide, "int");
    
    $id_type_brand = $_POST['id_type-brand'];
    
//    Lấy id type
    $id_type = select_idType($id_type_brand);
    
//    Lấy id brand
    $id_brand = select_idBrand($id_type_brand);
    
    product_add($name_product, $price, $describe, $content, $size, $targer_file, $material, $highlights, $promotion, $hide, $id_type, $id_brand,  $id_type_brand);
    
    $VIEW_NAME = "add.php";
    $thongbao = "Thêm mới thành công";
} else if(exist_param("add")) {
    $VIEW_NAME = "add.php";
} else if (exist_param("edit")) {
    
    $edit = product_loaddata($_GET['id_product']);
    $VIEW_NAME = "update.php";
    
} else if(exist_param("updateOb")){
    
    $product = product_selectOne($_POST['id_product']);
    $id_product = $_POST['id_product'];
    $name_product = $_POST['name_product'];
    $price = $_POST['price'];
    $describe = $_POST['describe'];
    $content = $_POST['content'];
    $size = $_POST['size'];
    
//    Xử lý hình ảnh
    $target_dir = "assets/image/products/";
    
    if(basename($_FILES['url_product']['name']) == ""){
        $targer_file = $product['image'];
    } else {
        unlink("../../" . $product['image']);
        
        $targer_file = $target_dir . basename($_FILES['url_product']['name']);
    
        move_uploaded_file($_FILES["url_product"]["tmp_name"], '../../' . $targer_file);
    }
    
    settype($size, "int");
    $material = $_POST['material'];
    $highlights = $_POST['highlights'];
    $promotion = $_POST['promotion'];
    $hide = $_POST['hide'];
    
    settype($hide, "int");
    
    $id_type_brand = $_POST['id_type-brand'];
    
    //    Lấy id type
    $id_type = select_idType($_POST['id_type-brand']);
    
//    Lấy id brand
    $id_brand = select_idBrand($_POST['id_type-brand']);
    
    product_updateA($name_product, $price, $describe, $content, $size, $targer_file ,$material, $highlights, $promotion, $hide, $id_type, $id_brand,  $id_type_brand, $id_product);
    
    $listOb = product_listall();
    $VIEW_NAME = "list.php";
    
} else if (exist_param("delete")) {
    $product = product_selectOne($_GET['id_product']);
    
    unlink("../../../" . $product['image']);
    
    product_delete($_GET['id_product']);
    
    $listOb = product_listall();
    $VIEW_NAME = "list.php";
    
} else {
    $listOb = product_listall();
    $VIEW_NAME = "list.php";
}

require_once "../index.php";
