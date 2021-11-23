<?php
if(isset($_GET['act'])) $act =$_GET['act'];

if($act == "cb"){
    
    $idBrand = $_GET['id'];
    $listProduct = product_selelctIdBrand($idBrand);
    
    require_once './site/product/collection_brand.php';
    
} else if($act == "collectionall"){
    
    $listBrand = brand_colectionAll();
    
    require_once './site/product/collection_all.php';
    
} else if($act == "ct"){
    
    $idType = $_GET['id'];
    $listProduct = product_selelctIdType($idType);
    
    require_once './site/product/collection_type.php';
    
}
?>
