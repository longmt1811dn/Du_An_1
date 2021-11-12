<?php
require_once "../../global.php";
require_once "../../dao/admin_type.php";

if (exist_param("listtype")) {
    $listtype = type_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("addType")) {
    $name_type = $_POST['name_type'];
    $hide = $_POST['hide'];
    settype($hide, "int");
    $location = $_POST['location'];
    $id_object = $_POST['id_object'];
    type_add($name_type, $hide, $location, $id_object);
    $VIEW_NAME  = "add.php";
    $thongbao = "THÊM MỚI THÀNH CÔNG";
} else if(exist_param("delete")){
    type_delete($_GET['id_type']);
    $listtype = type_listall();
    $VIEW_NAME = "list.php";
} else if(exist_param("edit")){
    $edit = type_loaddata($_GET['id_type']);
    $VIEW_NAME = "update.php";
} else if(exist_param("update")){
    $name_type = $_POST['name_type'];
    $hide = $_POST['hide'];
    $location = $_POST['location'];
    $id_object = $_POST['id_object'];
    $id_type = $_POST['id_type'];
    type_update($name_type, $hide, $location, $id_object, $id_type);
    $listtype = type_listall();
    $VIEW_NAME = "list.php";
}
 else {
    $VIEW_NAME = "add.php";
}

require_once "../index.php";
