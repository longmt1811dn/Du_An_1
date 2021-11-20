<?php
if(isset($_GET['act'])) $act = $_GET['act'];

if($act == ""){
    $list_highlights= product_selectFourHighlight();
    $list_date = product_selectFourDate();
    $list_view = product_selectFourView();
    $list_newsTwo = new_selectTwo();
    
    require_once './site/home/home.php';
}

else if($act == "about"){
    require_once './site/home/about.php';
}
?>
