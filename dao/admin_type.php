<?php
require_once "pdo.php";

// lấy danh sách type
function type_listall(){
    $pageSize = 9;
    $startRow = 0;
    $pageNum = 1;
    
    if(isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum']; 
    
    $startRow = ($pageNum - 1) * $pageSize;
    
    $sql = "SELECT * FROM type  LIMIT $startRow,$pageSize";
    return pdo_query($sql);
}

// lấy tên object trong danh sách type
function type_getNameObject($id_object){
    $sql = "SELECT name_object FROM object WHERE id_object = ?";
    $getNameOb =  pdo_query_one($sql, $id_object);
    return $getNameOb['name_object'];
}

// lấy option Object của Type
function type_getNameObject_option(){
    $sql = "SELECT * FROM object";
    return pdo_query($sql);
} 

// thêm mới type
function type_add($name_type, $hide, $location, $id_object){
    $sql = "INSERT INTO type(name_type, hide, location, id_object) VALUES(?,?,?,?)";
    pdo_execute($sql, $name_type, $hide, $location, $id_object);
}

// Xoá type
function type_delete($id_type){
    $sql = "DELETE FROM type WHERE id_type = ?";
    pdo_execute($sql, $id_type);
}

// load dữ liệu lên khi click vào nút sửa
function type_loaddata($id_type){
    $sql = "SELECT * FROM type WHERE id_type = ?";
    return pdo_query_one($sql, $id_type);
}

// cập nhật lại type
function type_update($name_type, $hide, $location, $id_object, $id_type){
    $sql = "UPDATE type SET name_type = ?, hide = ?, location = ?, id_object = ? WHERE id_type=?";
    pdo_execute($sql, $name_type, $hide, $location, $id_object, $id_type);
}

// lấy tên type
function product_getNameType($id_type)
{
    $sql = "SELECT name_type FROM type WHERE id_type = ?";
    $nameType = pdo_query_one($sql, $id_type);
    return $nameType['name_type'];
}

//Lấy tất cả type không phân trang
function type_selectall(){
    $sql = "SELECT * FROM type";
    
    return pdo_query($sql);
}

//Phân trang
function type_pagination(){
        $pageSize = 9;
        $pageNum = 1;
    
        $conn = pdo_get_connection();
        $offSet = 2;
        
        if(isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum']; 
        $sql = "SELECT count(*) FROM type";
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