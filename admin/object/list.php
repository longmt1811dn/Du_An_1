<?php require_once "../../dao/admin_object.php" ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách đối tượng người dùng</h4>
    </div>
    <div class="page-top_object">
        <div class="table-top-object">
            <div class="object-top-title">
                <div class="id-title"><span>#</span></div>
                <div class="name-title"><span>Dối tượng người sử dụng</span></div>
                <div class="location-title"><span>Vị trí hiện</span></div>
                <div class="status-title"><span>Tạng thái</span></div>
                <div class="action-title"><span>Hành động</span></div>
            </div>


            <?php $listOb = Object_listall(); ?>
            <?php foreach ($listOb as $list) { ?>
                <div class="object-item-title">
                    <div class="id-item">
                       <?= $list['id_object'] ?>
                    </div>
                    <div class="name-item">
                      <?= $list['name_object'] ?>
                    </div>
                    <div class="location-item">
                       <?= $list['location'] ?>
                    </div>
                    <div class="Status-item">
                       <?= ($list['hide'] == 1) ? "Hiện" : "Ẩn" ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_object=<?=$list['id_object']?>">Xoá</a>
                        <a class="admin__btn-update" href="?edit&id_object=<?=$list['id_object']?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <?php object_pagination(); ?>
</div>