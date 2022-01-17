<?php
require_once "pdo.php";

// danh sách object
function object_listall()
{
    $pageSize = 9;
    $startRow = 0;
    $pageNum = 1;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];

    $startRow = ($pageNum - 1) * $pageSize;

    $sql = "SELECT * FROM object ORDER BY id_object LIMIT $startRow,$pageSize";
    return pdo_query($sql);
}
// thêm tên loại (Object)
function object_add($name_object, $hide, $location)
{
    $sql = "INSERT INTO object(name_object, hide, location) VALUES (?,?,?) ";
    pdo_execute($sql, $name_object, $hide, $location);
}
// Xoá object
function object_delete($id_object)
{
    $sql = "DELETE FROM object WHERE id_object = ?";
    pdo_execute($sql, $id_object);
}
// Điếm số lượng kiểu trong một object

// load lên dữ liệu khi ấn vào sửa
function object_loaddata($id_object)
{
    $sql = "SELECT * FROM object WHERE id_object=?";
    return pdo_query_one($sql, $id_object);
}
// cập nhật lại Object
function object_update($name_object, $hide, $location, $id_object)
{
    $sql = "UPDATE object SET name_object = ?, hide = ?, location = ? WHERE id_object=?";
    pdo_execute($sql, $name_object, $hide, $location, $id_object);
}

function obj_select_all()
{
    $sql = "SELECT * FROM object where hide=1";
    return pdo_query($sql);
}

function object_pagination()
{

    $pageSize = 9;
    $pageNum = 1;

    $conn = pdo_get_connection();
    $offSet = 2;

    if (isset($_GET['pagenum']) == true) $pageNum = $_GET['pagenum'];
    $sql = "SELECT count(*) FROM object";
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
