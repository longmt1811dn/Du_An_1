<?php
if(isset($_GET['act'])) $act =$_GET['act'];

if($act == "login"){
    require_once './site/account/login.php';
} else if($act == "register"){
    require_once './site/account/register.php';
}
?>
