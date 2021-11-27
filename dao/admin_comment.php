<?php
require_once "pdo.php";

function comment_add($contentz, $title, $star, $id_user, $id_product)
{
    $sql = "INSERT INTO review(content, date, title, star, id_user, id_product) VALUES(?,now(),?,?,?,?)";
    pdo_execute($sql, $contentz, $title, $star, $id_user, $id_product);
}
// hiển thị bình luận theo id product
function comment_selectallOne($id_product)
{
    $sql = "SELECT * FROM review WHERE id_product = ?";
    return pdo_query($sql, $id_product);
}
// hiển thị tên theo id user
function comment_getNameUser($id_user)
{
    $sql = "SELECT * FROM users WHERE id_user = ?";
    $name = pdo_query_one($sql, $id_user);
    return $name['first_name'] . " " . $name['last_name'];
}
// xoá review
function comment_delete($id_review)
{
    $sql = "DELETE FROM review WHERE id_review = ?";
    pdo_execute($sql, $id_review);
}
