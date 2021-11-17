<?php
require_once "pdo.php";

// lấy danh sách thương hiệu brand
function brand_listall()
{
    $pageSize = 9;
    $startRow = 0;
    $pageNum = 1;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];

    $startRow = ($pageNum - 1) * $pageSize;

    $sql = "SELECT * FROM brand  LIMIT $startRow,$pageSize";
    return pdo_query($sql);
}

// thêm mới brand
function brand_add($name_brand, $hide, $location)
{
    $sql = "INSERT INTO brand(name_brand, hide, location) VALUES(?,?,?)";
    pdo_execute($sql, $name_brand, $hide, $location);
}

// xoá brand
function brand_delete($id_brand)
{
    $sql = "DELETE FROM brand WHERE id_brand=?";
    pdo_execute($sql, $id_brand);
}

// load dữ liệu lên khi click vào sửa
function brand_loaddata($id_brand)
{
    $sql = "SELECT * FROM brand WHERE id_brand=?";
    return pdo_query_one($sql, $id_brand);
}

// cập nhật brand
function brand_update($name_brand, $hide, $location, $id_brand)
{
    $sql = "UPDATE brand SET name_brand=?, hide=?, location = ? WHERE id_brand=?";
    pdo_execute($sql, $name_brand, $hide, $location, $id_brand);
}

// lấy tên brand
function product_getNameBrand($id_brand)
{
    $sql = "SELECT name_brand FROM brand WHERE id_brand = ?";
    $nameBrand = pdo_query_one($sql, $id_brand);
    return $nameBrand['name_brand'];
}

//Lấy tất cả type không phân trang
function brand_selectall()
{
    $sql = "SELECT * FROM brand";

    return pdo_query($sql);
}

function brand_select_by_id_type_brand($id_brand)
{
    $sql = "SELECT * FROM brand WHERE id_brand = ?";
    $row = pdo_query_one($sql, $id_brand);
    return $row['name_brand'];
}

//Phân trang
function brand_pagination()
{
    $pageSize = 9;
    $pageNum = 1;

    $conn = pdo_get_connection();
    $offSet = 2;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];
    $sql = "SELECT count(*) FROM brand";
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
