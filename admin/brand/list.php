<?php require_once "../../dao/admin_brand.php" ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách đối tượng người dùng</h4>
    </div>
    <div class="page-top_object">
        <div class="table-top-object">
            <div class="object-top-title">
                <div class="id-title"><span>#</span></div>
                <div class="name-title"><span>Name brand</span></div>
                <div class="location-title"><span>Location</span></div>
                <div class="status-title"><span>Status</span></div>
                <div class="action-title"><span>Action</span></div>
            </div>


            <?php $listbrand = brand_listall(); ?>
            <?php foreach ($listbrand as $list) { ?>
                <div class="object-item-title">
                    <div class="id-item">
                      <?= $list['id_brand'] ?>
                    </div>
                    <div class="name-item">
                      <?= $list['name_brand'] ?>
                    </div>
                    <div class="location-item">
                      <?= $list['location'] ?>
                    </div>
                    <div class="Status-item">
                      <?= ($list['hide'] == 1) ? "Hiện" : "Ẩn" ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_brand=<?= $list['id_brand'] ?>">Xoá</a>
                        <a class="admin__btn-update" href="?edit&id_brand=<?= $list['id_brand'] ?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php brand_pagination(); ?>

</div>