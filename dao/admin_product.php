<?php
require_once "pdo.php";

// danh sách object
function product_listall()
{
    $pageSize = 5;
    $startRow = 0;
    $pageNum = 1;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];

    $startRow = ($pageNum - 1) * $pageSize;

    $sql = "SELECT * FROM product  LIMIT $startRow,$pageSize";

    return pdo_query($sql);
}

// 
function product_getAllTypeBrand()
{
    $sql = "SELECT * FROM type_brand";
    return pdo_query($sql);
}

// thêm mới product
function product_add($name_product, $price, $describe, $content, $size, $targer_file, $material, $highlights, $promotion, $hide, $id_type, $id_brand,  $id_type_brand)
{
    $sql = "INSERT INTO product (`name_product`, `price`, `describe`, `content`, `size`,`image`,`material`, `date`,  `highlights`, `promotion`, `hide`, `id_type`, `id_brand`, `id_type_brand`) VALUES(?,?,?,?,?,?,?,now(),?,?,?,?,?,?)";
    pdo_execute($sql, $name_product, $price, $describe, $content, $size, $targer_file, $material, $highlights, $promotion, $hide, $id_type, $id_brand,  $id_type_brand);
}

//Xóa product
function product_delete($id_product)
{
    $sql = "DELETE FROM product WHERE id_product = ?";

    pdo_execute($sql, $id_product);
}

//Lấy chi tiêt 1 sản phẩm
function product_selectOne($id_product)
{
    $sql = "SELECT * FROM product WHERE id_product = ?";

    return pdo_query_one($sql, $id_product);
}

// load dữ liệu lên khi click vào nút sửa
function product_loaddata($id_product)
{
    $sql = "SELECT * FROM product WHERE id_product = ?";
    return pdo_query_one($sql, $id_product);
}

// cập nhật lại products
function product_update($name_product, $id_product)
{
    $sql = "UPDATE product SET `name_product`= ? WHERE `id_product` = ?";

    pdo_execute($sql, $name_product, $id_product);
}

// cập nhật lại products
function product_updateA($name_product, $price, $describe, $content, $size, $targer_file, $material, $highlights, $promotion, $hide, $id_type, $id_brand, $id_type_brand, $id_product)
{
    $sql = "UPDATE product SET `name_product`= ? ,`price`= ?,`image`= ?,`describe`= ?,`content`= ?,`size`= ?,`material`= ?,`date`= now() ,`highlights`= ?,`promotion`= ?, `hide`= ?,`id_type`= ?,`id_brand`= ?, `id_type_brand`= ? WHERE `id_product` = ?";

    pdo_execute($sql, $name_product, $price, $targer_file, $describe, $content, $size, $material, $highlights, $promotion, $hide, $id_type, $id_brand,  $id_type_brand, $id_product);
}

//Lấy name sản phẩm
function product_name($idProduct)
{
    $sql = "SELECT * FROM product WHERE id_product = ?";
    $row = pdo_query_one($sql, $idProduct);

    return $row['name_product'];
}

// Phân trang
function product_pagination()
{
    $pageSize = 5;
    $pageNum = 1;

    $conn = pdo_get_connection();
    $offSet = 2;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];
    $sql = "SELECT count(*) FROM product";
    $kq = $conn->query($sql);
    $r = $kq->fetch();

    $tongSoReCord = $r[0];
    $tongSoTrang = ceil($tongSoReCord / $pageSize);

    $from = $pageNum - $offSet;
    if ($from < 1) $from = 1;
    $to = $pageNum + $offSet;
    if ($to > $tongSoTrang) $to = $tongSoTrang;
    $pagePrev = $pageNum - 1;
    $pageNext = $pageNum + 1;

    echo '<ul class="page_phantrang">';

    if ($pageNum > 1) {

        echo '<li class=""><a class="page_num" href="?pagenum=1"><<</a></li>';
        echo '<li class=""><a class="page_num" href="?pagenum=' . $pagePrev . '"><</a></li>';
    }

    for ($i = $from; $i <= $to; $i++) {

        if ($tongSoTrang > 1) {

            if ($i == $pageNum) {

                echo '<li class=""><a class="page_num activex" href="?pagenum=' . $i . '">' . $i . '</a></li>';
            } else {

                echo '<li class=""><a class="page_num" href="?pagenum=' . $i . '">' . $i . '</a></li>';
            }
        }
    }

    if ($pageNum < $tongSoTrang) {

        echo '<li class=""><a class="page_num" href="?pagenum=' . $pageNext . '">></a></li>';
        echo '<li class=""><a class="page_num" href="?pagenum=' . $tongSoTrang . '">>></a></li>';
    }
    '</ul>
            </nav>
            </div> ';
}

// Đếm tổng số lượng sản phẩm
function product_countAll()
{
    $sql = "SELECT COUNT(*) as 'soLuong' FROM product";
    return pdo_query($sql);
}
// lấy TOP 5 sản phẩm xem nhiều hiển thị ra trang chủ admin
function product_top()
{
    $sql = "SELECT * FROM product WHERE hide = 1 ORDER BY view DESC LIMIT 0,5";
    return pdo_query($sql);
}

// lấy 4 sản phẩm nổi bật
function product_selectFourHighlight()
{
    $sql = "SELECT * FROM product WHERE highlights=0 limit 0,4";
    
    return pdo_query($sql);
}

// lấy 4 sản phẩm mới nhất
function product_selectFourDate()
{
    $sql = "SELECT * FROM product WHERE hide = 1 ORDER BY date DESC LIMIT 0,4";
    
    return pdo_query($sql);
}

// lấy 4 sản phẩm xem nhiều
function product_selectFourView()
{
    $sql = "SELECT * FROM product WHERE hide = 1 ORDER BY view DESC LIMIT 0,4";
    
    return pdo_query($sql);
}

//Đếm sản phẩm theo thương hiệu
function product_countIdBrand($idBrand){
    $sql = "SELECT COUNT(*) as so_luong FROM product WHERE id_brand = ?";
    $row = pdo_query_one($sql, $idBrand);
    
    return $row['so_luong'];
}

//Lấy hình ảnh của sản phẩm mới nhất từ thương hiệu
function product_imageIdBrand($idBrand){
    $sql = "SELECT * FROM product WHERE id_brand = ? ORDER BY date DESC LIMIT 0,1";
    $row = pdo_query_one($sql, $idBrand);
    
    return $row['image'];
}

// Lấy tất cả sản phẩm thuộc thương hiệu
function product_selelctIdBrand($idBrand){
    $sql = " SELECT * FROM product WHERE id_brand = ?";
    
    return pdo_query($sql, $idBrand);
}

// Lấy tất cả sản phẩm thuộc loại
function product_selelctIdType($idType){
    $pageSize = 12;
    $startRow = 0;
    $pageNum = 1;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];

    $startRow = ($pageNum - 1) * $pageSize;

    $sql = " SELECT * FROM product WHERE id_type = ?  LIMIT $startRow,$pageSize";
    
    return pdo_query($sql, $idType);
}

//Phân trang thương hiệu trang người dùng
function type_colectionAllPagination($idType)
{
    $pageSize = 12;
    $pageNum = 1;

    $conn = pdo_get_connection();
    $offSet = 2;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];
    $sql = "SELECT count(*) FROM product WHERE id_type = $idType";
    $kq = $conn->query($sql);
    $r = $kq->fetch();

    $tongSoReCord = $r[0];
    $tongSoTrang = ceil($tongSoReCord / $pageSize);

    $from = $pageNum - $offSet;
    if ($from < 1) $from = 1;
    $to = $pageNum + $offSet;
    if ($to > $tongSoTrang) $to = $tongSoTrang;
    $pagePrev = $pageNum - 1;
    $pageNext = $pageNum + 1;

    echo '<ul class="pagination__list pagination__list--m10">';

    if ($pageNum > 1) {

        echo '<li class=""><a class="btn btn--m" href="index.php?page=product&act=ct&id='.$idType.'&pagenum=1"><<</a></li>';
        echo '<li class=""><a class="btn btn--m" href="index.php?page=product&act=ct&id='.$idType.'&pagenum=' . $pagePrev . '"><</a></li>';
    }

    for ($i = $from; $i <= $to; $i++) {

        if ($tongSoTrang > 1) {

            if ($i == $pageNum) {

                echo '<li class=""><a class="btn btn--m activex" href="index.php?page=product&act=ct&id='.$idType.'&pagenum=' . $i . '">' . $i . '</a></li>';
            } else {

                echo '<li class=""><a class="btn btn--m" href="index.php?page=product&act=ct&id='.$idType.'&pagenum=' . $i . '">' . $i . '</a></li>';
            }
        }
    }

    if ($pageNum < $tongSoTrang) {

        echo '<li class=""><a class="btn btn--m" href="index.php?page=product&act=ct&id='.$idType.'&pagenum=' . $pageNext . '">></a></li>';
        echo '<li class=""><a class="btn btn--m" href="index.php?page=product&act=ct&id='.$idType.'&pagenum=' . $tongSoTrang . '">>></a></li>';
    }
    '</ul>
            </nav>
            </div> ';
}