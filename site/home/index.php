<?php
if(isset($_GET['act'])) $act = $_GET['act'];

if($act == ""){
    require_once './site/home/home.php';
}
?>
