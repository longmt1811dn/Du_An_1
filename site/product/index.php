<?php
if(isset($_GET['act'])) $act =$_GET['act'];

if($act == "collection"){
    
    $idBrand = $_GET['id'];
    $listProduct = product_selelctIdBrand($idBrand);
    
    require_once './site/product/collection.php';
    
} else if($act == "collectionall"){
    
    $listBrand = brand_colectionAll();
    
    require_once './site/product/collection_all.php';
    
}
?>
