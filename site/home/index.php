
<?php
if(isset($_GET['act'])) $act = $_GET['act'];

if($act == ""){
    $list_highlights= product_selectFourHighlight();
    require_once './site/home/home.php';
}
?>
