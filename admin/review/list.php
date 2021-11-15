<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách </h4>
    </div>
    <div class="page-top_object">
        <div class="table-top-object">
            <div class="object-top-title">
                <div class="id-title"><span>#</span></div>
                <div class="name-title"><span>Name product</span></div>
                <div class="location-title"><span>Number</span></div>
                <div class="action-title" style="width: 30%"><span>Action</span></div>
            </div>

            <?php foreach ($list as $item) { ?>
                <div class="object-item-title">
                    <div class="id-item">
                      <?= $item['id_product'] ?>
                    </div>
                    <div class="name-item">
                      <?= product_name($item['id_product']) ?>
                    </div>
                    <div class="location-item">
                      <?= $item['number'] ?>
                    </div>
                    <div class="action-item" style="width: 30%">
                        <a class="admin__btn-update" href="?details&id_product=<?= $item['id_product'] ?>">Xem tất cả đánh giá về sản phẩm này</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>

