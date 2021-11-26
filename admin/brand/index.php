<?php
require_once "../../global.php";
require_once "../../dao/admin_brand.php";

if (exist_param("listbrand")) {
    $listbrand = brand_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("addBrand")) {
    $name_brand = $_POST['name_brand'];
    $hide = $_POST['hide'];
    settype($hide, "int");
    $location = $_POST['location'];
    brand_add($name_brand, $hide, $location);
    $VIEW_NAME = "add.php";
    $thongbao = "THÊM MỚI THÀNH CÔNG";
} else if (exist_param("delete")) {
    if (brand_getCountProduct($_GET['id_brand']) > 0) {
        echo "<script>alert('Có sản phẩm đang tồn tại thương hiệu này, không thể xoá')</script>";
        $listbrand = brand_listall();
        $VIEW_NAME = "list.php";
    } else {
       
            brand_delete($_GET['id_brand']);
        $listbrand = brand_listall();
        $VIEW_NAME = "list.php";
    }
} else if (exist_param("edit")) {
    $edit = brand_loaddata($_GET['id_brand']);
    $VIEW_NAME = "update.php";
} else if (exist_param("update")) {
    $name_brand = $_POST['name_brand'];
    $hide = $_POST['hide'];
    $location = $_POST['location'];
    $id_brand = $_POST['id_brand'];
    brand_update($name_brand, $hide, $location, $id_brand);
    $listbrand = brand_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("add")) {
    $VIEW_NAME = "add.php";
} else {
    $listbrand = brand_listall();
    $VIEW_NAME = "list.php";
}
require_once "../index.php";
