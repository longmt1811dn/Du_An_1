<?php
require_once "../../global.php";
require_once "../../dao/admin_cart.php";
if (exist_param("list")) {
    $VIEW_NAME = "./list.php";
} else if (exist_param("delete")) {
    $id_bill_detail = $_GET['id_bill_detail'];
    cart_deleteID($id_bill_detail);
    $VIEW_NAME = "./detail_cart.php";
} else if (exist_param("edit")) {
    $id_bill = $_GET['id_bill'];
    $edit = cart_editloadstatus_noteadmin($id_bill);
    $VIEW_NAME = "./update.php";
} else if (exist_param("updateOb")) {
    $id_bill = $_POST['id_bill'];
    $note_admin = trim($_POST['note_admin']);
    $status = $_POST['status'];
    $hide = $_POST['hide'];
    cart_update($status, $note_admin, $hide, $id_bill);
    $VIEW_NAME = "./list.php";
} else {
    $id_bill = $_GET['id_bill'];
    $loadoneID = cart_loadoneID($id_bill);
    $VIEW_NAME = "./detail_cart.php";
}
require_once "../index.php";
