<?php
require_once "../../global.php";
require_once "../../dao/admin_users.php";

if (exist_param("listusers")) {
    $listUsers = users_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("edit")) {
    $edit = users_loaddata($_GET['id_user']);
    $VIEW_NAME = "update.php";
} else if (exist_param("update")) {
    $account = $_POST['account'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $activated = $_POST['activated'];
    $role = $_POST['role'];
    $id_user = $_POST['id_user'];
    users_update($account, $password, $first_name, $last_name, $email, $activated, $role, $id_user);
    $listUsers = users_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("delete")) {
    users_delete($_GET['id_user']);
    $listUsers = users_listall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "list.php";
}
require_once "../index.php";
