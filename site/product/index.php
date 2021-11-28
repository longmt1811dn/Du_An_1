<?php
require_once "./dao/admin_comment.php";
if (isset($_GET['act'])) $act = $_GET['act'];

if ($act == "cb") {
    $_SESSION['link'] = getCurrentPageURL();
    $idBrand = $_GET['id'];
    $listProduct = product_selelctIdBrand($idBrand);

    require_once './site/product/collection_brand.php';
} else if ($act == "collectionall") {

    $listBrand = brand_colectionAll();

    require_once './site/product/collection_all.php';
} else if ($act == "ct") {
    $_SESSION['link'] = getCurrentPageURL();
    $idType = $_GET['id'];
    $listProduct = product_selelctIdType($idType);

    require_once './site/product/collection_type.php';
} else if ($act == "al") {
    if (isset($_GET['id'])) {
        $idProduct = $_GET['id'];
    }

    if (!isset($_SESSION['login_id'])) {
        echo '<script>alert("Vui lòng đăng nhập để yêu thích sản phẩm"); window.location="' . $_SESSION['link'] . ' ";</script>';
    } else {
        $conn = pdo_get_connection();
        $sql = "SELECT * FROM like_product WHERE id_product = {$idProduct} AND id_user = {$_SESSION['login_id']}";
        $kq = $conn->query($sql);

        if ($kq->rowCount() > 0) {

            like_product_del($idProduct, $_SESSION['login_id']);

            echo '<script>alert("Bạn đã bỏ thích sản phẩm"); window.location="' . $_SESSION['link'] . ' ";</script>';
            exit();
        } else {
            like_product_add($idProduct, $_SESSION['login_id']);

            echo '<script>alert("Bạn đã thêm sản phẩm yêu thích"); window.location="' . $_SESSION['link'] . ' ";</script>';
            exit();
        }
    }
} else if ($act == "pd") {
    $_SESSION['link'] = getCurrentPageURL();
    
    if (isset($_GET['id_product']))  $id_product = $_GET['id_product'];
    
    $detail = product_selectallOne($id_product);
    
    product_upView($id_product);
    
    require_once './site/product/product_details.php';
} else if($act == "deletecomment"){
    if(isset($_GET['id_review'])){
        comment_delete($_GET['id_review']);
    }
    $detail = product_selectallOne($id_product);
    require_once './site/product/product_details.php';
}
