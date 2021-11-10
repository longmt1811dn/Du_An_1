<?php
require_once "pho.php";

// danh sách object
function Object_listall(){
    $sql = "SELECT * FROM object";
    return pdo_query($sql);
}
