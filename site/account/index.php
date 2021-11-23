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
    require_once './site/account/info.php';
} else if($act == "checkverifile"){
    require_once './site/account/checkverifile.php';
}
