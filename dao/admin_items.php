<?php
 require_once "pdo.php";

 // thống kê mặt hàng
 function items_thongke(){
     $sql = "SELECT brand.id_brand as 'id_brand' , brand.name_brand as 'name_brand', 
     COUNT(product.id_product) as 'soLuong', 
     MIN(product.price) as 'price_min', MAX(product.price) as 'price_max', 
     AVG(product.price) as 'price_avg' FROM product 
     JOIN brand ON brand.id_brand = product.id_type_brand 
     GROUP BY brand.id_brand";
     return pdo_query($sql);
 }

?>