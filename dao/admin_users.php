<?php
    function users_one($idUser){
        $sql = "SELECT * FROM `users` WHERE id_user = ?";
        return pdo_query_one($sql, $idUser);
    }
?>