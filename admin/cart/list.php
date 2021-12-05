<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách </h4>
    </div>
    <div class="page-top_object">
        <div class="table-top-object">
            <div class="object-top-title">
                <div class="id-title"><span>#</span></div>
                <div class="name-title"><span>Tên người đặt</span></div>
                <div class="location-title"><span>Trạng thái đơn</span></div>
                <div class="action-title" style="width: 30%"><span>Hành động</span></div>
            </div>

            <?php $loadall = cart_loadall();
            foreach ($loadall as $item) { ?>
                <div class="object-item-title">
                    <div class="id-item">
                        <?= $item['id_bill'] ?>
                    </div>
                    <div class="name-item">
                        <?= $item['first_name'] . ' ' . $item['last_name'] ?>
                    </div>
                    <div class="location-item">
                        <?= ($item['status'] == 0) ? "Chưa duyệt" : "Đã duyệt" ?>
                    </div>
                    <div class="action-item" style="width: 30%">
                        <a class="admin__btn-del" href="?edit&id_bill=<?= $item['id_bill'] ?>">Cập nhật hoá đơn</a>
                        <a class="admin__btn-update" href="?detail&id_bill=<?= $item['id_bill'] ?>">Chi tiết đơn hàng</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>