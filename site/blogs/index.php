<?php
if(isset($_GET['act'])) $act =$_GET['act'];

if($act == "news"){

    require_once './site/blogs/news.php';
}
