<?php
    if(isset($_GET['page']))
        
    $page = $_GET['page'];
    
    else
        
    $page = "";
    
    switch ($page) {
        case "product": require_once './site/product/index.php';   break;
        case "account": require_once './site/account/index.php';   break;
        
        default : require_once './site/home/index.php';
    }
?>

