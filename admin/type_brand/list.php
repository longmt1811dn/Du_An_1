<div class="admin-main_page">
            <div class="page-title_box">
                <h4 class="page-title">Danh sách</h4>
            </div>
            <div class="page-top_product">
                <div class="table-top-product">
                    <div class="top-title">
                        <div class="id-top-title id-type-brand-title"><span>#</span></div>
                        <div class="name-top-title"><span>Name type</span></div>
                        <div class="name-top-title"><span>Name brand</span></div>
                        <div class="status-top-title"><span>Status</span></div>
                        <div class="action-top-title">Action</div>
                    </div>

            <?php foreach ($listTypeBrand as $list) { ?>

                <div class="item-top-title">
                    <div class="id-item">
                        <?= $list['id_type_brand'] ?>
                    </div>
                    <div class="name-item">
                        <?= product_getNameType($list['id_type']) ?>
                    </div>
                    <div class="name-item">
                        <?= product_getNameBrand($list['id_brand']) ?>
                    </div>
                    <div class="Status-item">
                        <?= ($list['hide'] == 1) ? "Hiện" : "Ẩn"  ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_type_brand=<?= $list['id_type_brand'] ?>">Xoá</a>
                        <a class="admin__btn-update" href="?edit&id_type_brand=<?= $list['id_type_brand'] ?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php type_brand_pagination() ?>
    
</div>