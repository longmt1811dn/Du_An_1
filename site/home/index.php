<?php
if(isset($_GET['act'])) $act = $_GET['act'];

if($act == ""){
    $_SESSION['link'] = getCurrentPageURL();
    
    $list_highlights= product_selectFourHighlight();
    $list_date = product_selectFourDate();
    $list_view = product_selectFourView();
    $list_newsTwo = new_selectTwo();
    
    require_once './site/home/home.php';
} else if($act == "about"){
    
    require_once './site/home/about.php';
    
} else if($act == "contact"){
    
    require_once './site/home/contact.php';
    
}
?>
