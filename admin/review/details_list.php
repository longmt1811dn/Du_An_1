<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title"><?= product_name($_GET['id_product']) ?> - Tất cả đánh giá</h4>
    </div>
    <div class="page-top_product">
        <div class="table-top-product">
            <div class="top-title">
                <div class="idz-top-title"><span>#</span></div>
                <div class="name-top-title"><span>Content</span></div>
                <div class="img-top-title"><span>Title</span></div>
                <div class="pricez-top-title"><span>Price</span></div>
                <div class="view-top-title"><span>View</span></div>
                <div class="status-top-title"><span>Status</span></div>
                <div class="action-top-title">Action</div>
            </div>
            <?php $listprod = product_listall(); ?>
            <?php foreach ($listprod as $list) { ?>
                <div class="item-top-title">
                    <div class="idz-item">
                        <?= $list['id_product'] ?>
                    </div>
                    <div class="name-item">
                        <?= $list['name_product'] ?>
                    </div>
                    <div class="img-item">
                        <img src="../../../<?= $list['image'] ?>" alt="" />
                    </div>
                    <div class="pricez-item">
                        <?= number_format($list['price']) ?>
                    </div>
                    <div class="view-item">
                        <?= $list['view'] ?>
                    </div>
                    <div class="Status-item">
                        <?= ($list['hide'] == 1) ? "Hiện" : "Ẩn"  ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_product=<?= $list['id_product'] ?>">Xoá</a>
                        <a class="admin__btn-update" href="?edit&id_product=<?= $list['id_product'] ?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php object_pagination(); ?>
</div>