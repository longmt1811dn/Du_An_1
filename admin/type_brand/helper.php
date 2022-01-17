<?php
    require_once '../../dao/pdo.php';
    require_once '../../dao/admin_brand.php';
    
    $conn = pdo_get_connection();
    
    $idType = $_GET['idtype'];
    $list = brand_selectall();
    
    echo '<select name="id_brand" required>';
    echo '<option value disabled selected > Chọn thương hiệu </option>';
    
    foreach ($list as $item){
        
        $sql = "SELECT * FROM type_brand WHERE id_type = '{$idType}' AND id_brand = '{$item['id_brand']}'";
        $kq = $conn->query($sql);
        
        if ($kq->rowCount() == 0) {
            echo '<option value='.$item['id_brand'].'>'. $item['name_brand'] .'</option>';
        }
    }
    echo '</select>';
?>