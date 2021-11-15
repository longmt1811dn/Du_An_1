<?php
    require_once '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/admin_review.php';
    require_once '../../dao/admin_product.php';
    require_once '../../dao/admin_users.php';
    
    if(exist_param('list')){
        
        $list = review_list();
        $VIEW_NAME = 'list.php';
        
    } else if(exist_param('details')) {
        
        $idProduct = $_GET['id_product'];
        $list = review_list_id_product($idProduct);
        
        $VIEW_NAME = 'details_list.php';
        
    } else if(exist_param('delete')) {
        
        $idReview = $_GET['id_review'];
        
        review_delete($idReview);
        
        $list = review_list();
        $VIEW_NAME = 'list.php';
        
    } else {
        
        $list = review_list();
        $VIEW_NAME = 'list.php';
        
    }
    
    require_once '../index.php';
?>

