<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/admin_type_brand.php';
require_once '../../dao/admin_brand.php';
require_once '../../dao/admin_type.php';

if(exist_param("list")){
    
    $listTypeBrand = type_brand_listall();
    $VIEW_NAME = 'list.php';
    
} else if(exist_param("add")) {
    
    $VIEW_NAME = 'add.php';
    
}  else if(exist_param('addTB')){
    
    $idType = $_POST['id_type'];
    $idBrand = $_POST['id_brand'];
    $hide = $_POST['hide'];
    
    type_brand_add($idType, $idBrand, $hide);
    
    $listTypeBrand = type_brand_listall();
    $VIEW_NAME = 'list.php';
    
}else if(exist_param("delete")){
    
    type_brand_delete($_GET['id_type_brand']);
    
    $listTypeBrand = type_brand_listall();
    $VIEW_NAME = 'list.php';
} else if(exist_param("edit")){
    
    $edit = type_brand_loaddata($_GET['id_type_brand']);
    $conn = pdo_get_connection();
    $VIEW_NAME = "update.php";
    
} else if(exist_param("updateTB")){
    $idType = $_POST['id_type'];
    $idBrand = $_POST['id_brand'];
    $hide = $_POST['hide'];
    $id_type_brand = $_POST['id_type_brand'];
    
    type_brand_update($idType, $idBrand, $hide, $id_type_brand);
    
    $listTypeBrand = type_brand_listall();
    $VIEW_NAME = 'list.php';
} else {
    
    $listTypeBrand = type_brand_listall();
    $VIEW_NAME = 'list.php';
    
}

require_once '../index.php';
?>