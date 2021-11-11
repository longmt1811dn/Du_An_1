<?php require_once "../../dao/admin_object.php" ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách</h4>
    </div>
    <div class="page-top_object">
        <div class="table-top-object">
            <div class="top-title">
                <div class="id-title"><span>#</span></div>
                <div class="name-title"><span>Name Object</span></div>
                <div class="location-title"><span>Location</span></div>
                <div class="status-title"><span>Status</span></div>
                <div class="action-title"><span>Action</span></div>
            </div>


            <?php $listOb = Object_listall(); ?>
            <?php foreach ($listOb as $list) { ?>
                <div class="item-title">
                    <div class="id-item">
                        <p><?= $list['id_object'] ?></p>
                    </div>
                    <div class="name-item">
                        <p><?= $list['name_object'] ?></p>
                    </div>
                    <div class="location-item">
                        <p><?= $list['location'] ?></p>
                    </div>
                    <div class="Status-item">
                        <p><?= ($list['hide'] == 1) ? "Hiện" : "Ẩn" ?></p>
                    </div>
                    <div class="action-item">
                        <a onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_object=<?=$list['id_object']?>">Xoá</a>
                        <a href="?edit&id_object=<?=$list['id_object']?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="page_phantrang">
        <a class="page_num activex" href="">1</a>
        <a class="page_num" href="">2</a>
        <a class="page_num" href="">3</a>
    </div>
</div>