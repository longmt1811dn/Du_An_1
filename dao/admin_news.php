<?php
require_once "pdo.php";

// lấy tổng bài viết
function news_countAll()
{
    $sql = "SELECT COUNT(*) as 'soLuong' FROM news";
    return pdo_query($sql);
}

// lấy danh sách bài viết
function news_listall()
{
    $sql = "SELECT * FROM news";
    return pdo_query($sql);
}

// thêm bài viết
function news_add($title, $describe, $content, $hide, $highlights, $targer_file, $id_user)
{
    $sql = "INSERT INTO news(title, summary, content,date,hide,highlights,image_new, id_user) VALUES(?,?,?,now(),?,?,?,?)";
    pdo_execute($sql, $title, $describe, $content, $hide, $highlights, $targer_file, $id_user);
}

// lấy tên người đăng bài viết
function news_getNameUser($id_user)
{
    $sql = "SELECT first_name FROM users WHERE id_user = ?";
    $getName = pdo_query_one($sql, $id_user);
    return $getName['first_name'];
}

// load dữ liệu khi click vào sửa
function news_loaddata($id_news)
{
    $sql = "SELECT * FROM news WHERE id_news = ?";
    return pdo_query_one($sql, $id_news);
}

// xoá bài viết
function news_delete($id_news)
{
    $sql = "DELETE FROM news WHERE id_news = ?";
    pdo_execute($sql, $id_news);
}

// cập nhật bài viết
function news_update($title, $describe, $content, $hide, $highlights, $targer_file, $id_user, $id_news)
{
    $sql = "UPDATE news SET title = ?, summary = ?, content = ?, date = now() , hide = ?, highlights = ? ,image_new = ?, id_user = ? WHERE id_news = ?";
    pdo_execute($sql, $title, $describe, $content, $hide, $highlights, $targer_file, $id_user, $id_news);
}
