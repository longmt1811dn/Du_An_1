<?php
if(isset($_GET['act'])) $act =$_GET['act'];

if($act == "collection"){
    require_once './site/product/collection.php';
} else if($act == "collectionall"){
    require_once './site/product/collection_all.php';
}
?>
