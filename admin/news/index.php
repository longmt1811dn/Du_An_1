<?php
require_once "../../global.php";
require_once "../../dao/admin_news.php";

if (exist_param("listnew")) {
    $listnew = news_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("addnew")) {
    $title = $_POST['title'];
    $describe = $_POST['describe'];
    $content = $_POST['content'];
    $hide = $_POST['hide'];
    $highlights = $_POST['highlights'];
    $target_dir = "Du_An_1/assets/image/";
    $targer_file = $target_dir . basename($_FILES['image_new']['name']);
    move_uploaded_file($_FILES["image_new"]["tmp_name"], '../../../' . $targer_file);
    $id_user = $_POST['id_user'];
    news_add($title, $describe, $content, $hide, $highlights, $targer_file, $id_user);
    $VIEW_NAME = "add.php";
} else if (exist_param("edit")) {
    $edit = news_loaddata($_GET['id_news']);
    $VIEW_NAME = "update.php";
} else if (exist_param("update")) {
    $news = news_loaddata($_POST['id_news']);
    $title = $_POST['title'];
    $describe = $_POST['describe'];
    $content = $_POST['content'];
    $hide = $_POST['hide'];
    $highlights = $_POST['highlights'];
    //    Xử lý hình ảnh
    $target_dir = "Du_An_1/assets/image/";

    if (basename($_FILES['image_new']['name']) == "") {
        $targer_file = $news['image_new'];
    } else {
        unlink("../../../" . $news['image_new']);

        $targer_file = $target_dir . basename($_FILES['image_new']['name']);

        move_uploaded_file($_FILES["image_new"]["tmp_name"], '../../../' . $targer_file);
    }
    $id_user = $_POST['id_user'];
    $id_news = $_POST['id_news'];
    news_update($title, $describe, $content, $hide, $highlights, $targer_file, $id_user, $id_news);
    $listnew = news_listall();
    $VIEW_NAME = "list.php";
} else if (exist_param("delete")) {
    unlink("../../../" . $news['image_new']);
    news_delete($_GET['id_news']);
    $listnew = news_listall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require_once "../index.php";
