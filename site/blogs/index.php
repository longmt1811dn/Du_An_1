<?php
if(isset($_GET['act'])) $act =$_GET['act'];

if($act == "news"){
    $idNew = $_GET['id'];
    $item = news_loaddata($idNew);
    
    require_once './site/blogs/news.php';
} else if($act = "blogs") {
    $listFive = new_selectFive();
    
    require_once './site/blogs/blogs.php';
}
