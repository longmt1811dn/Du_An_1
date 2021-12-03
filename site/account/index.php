<?php
if (isset($_GET['act'])) $act = $_GET['act'];

if ($act == "login") {

    require_once './site/account/login.php';
} else if ($act == "register") {

    require_once './site/account/register.php';
} else if ($act == "forgotpass") {

    require_once './site/account/forgotpass.php';
} else if ($act == "resert-pass") {

    require_once './site/account/resert-pass.php';
} else if ($act == "profile") {

    $item = users_one($_SESSION['login_id']);

    require_once './site/account/info.php';
} else if ($act == "checkverifile") {

    require_once './site/account/checkverifile.php';
} else if ($act == "love") {
    $_SESSION['link'] = getCurrentPageURL();
    $list = like_productIdUser($_SESSION['login_id']);

    require_once './site/account/wishlist.php';
} else if ($act == "cart") {
    if (isset($_GET['delete'])) {
        $id_cart = $_GET['id_cart'];
        array_splice($_SESSION['cart'], $id_cart, 1);
    }
    if(isset($_GET['deleteall'])){
        unset($_SESSION['cart']);
    }
    if (!isset($_SESSION['users'])) {
        echo "<script>alert('đăng nhập để xem giỏ hàng'); window.location='?page=account&act=login'; </script>";
    }
    $_SESSION['link'] = getCurrentPageURL();

    require_once './site/account/cart.php';
}
