<?php require_once "../../dao/admin_type.php"; ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách</h4>
    </div>
    <div class="page-top_product">
        <div class="table-top-type">
            <div class="top-title">
                <div class="id-title"><span>#</span></div>
                <div class="name-title"><span>Name type</span></div>
                <div class="location-title"><span>Location</span></div>
                <div class="status-title"><span>Status</span></div>
                <div class="object-title"><span>Object</span></div>
                <div class="action-title"><span>Action</span></div>
            </div>

            <?php $listtype = type_listall(); ?>

            <?php foreach ($listtype as $list) { ?>

                <div class="item-title">
                    <div class="id-item">
                        <?= $list['id_type'] ?>
                    </div>
                    <div class="name-item">
                        <?= $list['name_type'] ?>
                    </div>
                    <div class="location-item">
                        <?= $list['location'] ?>
                    </div>
                    <div class="Status-item">
                        <?= ($list['hide'] == 1) ? "Hiện" : "Ẩn"  ?>
                    </div>
                    <div class="object-item">
                        <?= type_getNameObject($list['id_object']); ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_type=<?= $list['id_type'] ?>">Xoá</a>
                        <a class="admin__btn-update" href="?edit&id_type=<?= $list['id_type'] ?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php type_pagination(); ?>

</div>