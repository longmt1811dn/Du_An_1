<?php
require_once "pdo.php";

// danh sách object
function product_listall()
{
    $pageSize = 5;
    $startRow = 0;
    $pageNum = 1;
    
    if(isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum']; 
    
    $startRow = ($pageNum - 1) * $pageSize;
    
    $sql = "SELECT * FROM product  LIMIT $startRow,$pageSize";
    
    return pdo_query($sql);
}

// lấy tên type trong product
function product_getNameType($id_type)
{
    $sql = "SELECT name_type FROM type WHERE id_type = ?";
    $nameType = pdo_query_one($sql, $id_type);
    return $nameType['name_type'];
}

// lấy tên brand trong product
function product_getNameBrand($id_brand)
{
    $sql = "SELECT name_brand FROM brand WHERE id_brand = ?";
    $nameBrand = pdo_query_one($sql, $id_brand);
    return $nameBrand['name_brand'];
}

// 
function product_getAllTypeBrand()
{
    $sql = "SELECT * FROM type_brand";
    return pdo_query($sql);
}

// thêm mới product
function product_add($name_product, $price, $describe, $content, $size, $targer_file ,$material, $highlights, $promotion, $hide,  $id_type_brand)
{
    $sql = "INSERT INTO product (`name_product`, `price`, `describe`, `content`, `size`,`image`,`material`, `date`,  `highlights`, `promotion`, `hide`, `id_type_brand`) VALUES(?,?,?,?,?,?,?,now(),?,?,?,?)";
    pdo_execute($sql, $name_product, $price, $describe, $content, $size, $targer_file, $material, $highlights, $promotion, $hide,  $id_type_brand);
}

//Xóa product
function product_delete($id_product){
    $sql = "DELETE FROM product WHERE id_product = ?";
    
    pdo_execute($sql, $id_product);
}

//Lấy chi tiêt 1 sản phẩm
function product_selectOne($id_product){
    $sql = "SELECT * FROM product WHERE id_product = ?";
    
    return pdo_query_one($sql, $id_product);
}

// load dữ liệu lên khi click vào nút sửa
function product_loaddata($id_product){
    $sql = "SELECT * FROM product WHERE id_product = ?";
    return pdo_query_one($sql, $id_product);
}

// cập nhật lại products
function product_update($name_product, $id_product){
    $sql = "UPDATE product SET `name_product`= ? WHERE `id_product` = ?";
    
    pdo_execute($sql, $name_product, $id_product);
}

// cập nhật lại products
function product_updateA($name_product, $price, $describe, $content, $size, $targer_file ,$material, $highlights, $promotion, $hide,  $id_type_brand, $id_product){
    $sql = "UPDATE product SET `name_product`= ? ,`price`= ?,`image`= ?,`describe`= ?,`content`= ?,`size`= ?,`material`= ?,`date`= now() ,`highlights`= ?,`promotion`= ?, `hide`= ?,`id_type_brand`= ? WHERE `id_product` = ?";
    
    pdo_execute($sql, $name_product, $price, $targer_file, $describe, $content, $size, $material, $highlights, $promotion, $hide,  $id_type_brand, $id_product);
}

// Phân trang
function object_pagination(){
        $pageSize = 5;
        $pageNum = 1;
    
        $conn = pdo_get_connection();
        $offSet = 2;
        
        if(isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum']; 
        $sql = "SELECT count(*) FROM product";
        $kq = $conn->query($sql);
        $r = $kq->fetch();
        
        $tongSoReCord = $r[0];
        $tongSoTrang = ceil($tongSoReCord / $pageSize);
        
        $from = $pageNum - $offSet; if($from < 1) $from = 1;
        $to = $pageNum + $offSet; if($to > $tongSoTrang) $to = $tongSoTrang;
        $pagePrev = $pageNum - 1;
        $pageNext = $pageNum + 1;
        
        echo '<ul class="page_phantrang">';
                
                    if($pageNum >1) {
                        
                    echo '<li class=""><a class="page_num" href="?pagenum=1"><<</a></li>';
                    echo '<li class=""><a class="page_num" href="?pagenum='.$pagePrev.'"><</a></li>';
                            
                    }
                    
                    for($i = $from; $i <= $to; $i++) {
                        
                        if($tongSoTrang > 1){
                            
                            if($i == $pageNum) {
                                
                            echo '<li class=""><a class="page_num activex" href="?pagenum='.$i.'">'.$i.'</a></li>';
                            
                        } else {
                            
                            echo '<li class=""><a class="page_num" href="?pagenum='.$i.'">'.$i.'</a></li>';
                            
                        }
                        }
                    }
                    
                    if($pageNum < $tongSoTrang) {
                        
                    echo '<li class=""><a class="page_num" href="?pagenum='. $pageNext .'">></a></li>';
                    echo '<li class=""><a class="page_num" href="?pagenum='. $tongSoTrang .'">>></a></li>';
                    
                    }
                '</ul>
            </nav>
            </div> ';
    }