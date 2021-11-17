<?php
function type_brand_listall()
{
    $pageSize = 9;
    $startRow = 0;
    $pageNum = 1;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];

    $startRow = ($pageNum - 1) * $pageSize;

    $sql = "SELECT * FROM type_brand LIMIT $startRow,$pageSize";

    return pdo_query($sql);
}

// Thêm type brand
function type_brand_add($idType, $idBrand, $hide)
{
    $sql = "INSERT INTO type_brand (`id_type`, `id_brand`, `hide`) VALUES (?, ?, ?)";

    pdo_execute($sql, $idType, $idBrand, $hide);
}

// load dữ liệu lên khi click vào nút sửa
function type_brand_loaddata($id_type_brand)
{
    $sql = "SELECT * FROM type_brand WHERE id_type_brand = ?";

    return pdo_query_one($sql, $id_type_brand);
}

// cập nhật lại type
function type_brand_update($idType, $idBrand, $hide, $id_type_brand)
{
    $sql = "UPDATE type_brand SET id_type = ?, id_brand = ?, hide = ? WHERE id_type_brand = ?";
    pdo_execute($sql, $idType, $idBrand, $hide, $id_type_brand);
}

// Xoá type brand
function type_brand_delete($id_type_brand)
{
    $sql = "DELETE FROM type_brand WHERE id_type_brand = ?";

    pdo_execute($sql, $id_type_brand);
}

function type_brand_select_idType($id_type)
{
    $sql = "SELECT * FROM type_brand WHERE id_type = ?";
    return pdo_query($sql, $id_type);
}

//Phân trang
function type_brand_pagination()
{
    $pageSize = 9;
    $pageNum = 1;

    $conn = pdo_get_connection();
    $offSet = 2;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];
    $sql = "SELECT count(*) FROM type_brand";
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
