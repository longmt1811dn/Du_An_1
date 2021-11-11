<?php
require_once "../../global.php";
require_once "../../dao/pdo.php";
require_once "../../dao/admin_object.php";

if (exist_param("listob")) {
    $listOb = Object_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("addOb")) {
    $name_object = $_POST['name_object'];
    $hide = $_POST['hide'];
    $location = $_POST['location'];
    settype($hide, "int");
    object_add($name_object, $hide, $location);
    $VIEW_NAME = "add.php";
    $thongbao = "Thêm mới thành công";
} else if (exist_param("delete")) {
    object_delete($_GET['id_object']);
    $listOb = Object_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("edit")) {
    $edit = object_loaddata($_GET['id_object']);
    $VIEW_NAME = "update.php";
} else if (exist_param("updateOb")) {
    $name_object = $_POST['name_object'];
    $hide = $_POST['hide'];
    settype($hide, "int");
    $location = $_POST['location'];
    $id_object = $_POST['id_object'];
    object_update($name_object, $hide, $location, $id_object);
    $listOb = Object_listall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require_once "../index.php";
