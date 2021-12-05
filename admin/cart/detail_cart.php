<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title"> - Tất cả đánh giá</h4>
    </div>
    <div class="page-top_product">
        <div class="table-top-product">
            <div class="top-title">
                <div class="idz-top-title"><span>ID</span></div>
                <div class="img-top-title"><span>Mã đơn hàng</span></div>
                <div class="name-top-title"><span>Tên sản phẩm</span></div>
                <div class="pricez-top-title"><span>Đơn giá</span></div>
                <div class="view-top-title"><span>S.Lượng</span></div>
                <div class="status-top-title"><span>Tổng tiền</span></div>
                <div class="action-top-title">Hành động</div>
            </div>
            <?php
            foreach ($loadoneID as $item) { ?>
                <div class="item-top-title">
                    <div class="idz-item">
                        <?= $item['id_bill_detail'] ?>
                    </div>
                    <div class="img-item">
                        <?= $item['id_bill'] ?>
                    </div>
                    <div class="name-item" style="word-wrap: break-word;">
                        <?= $item['name_product'] ?>
                    </div>
                    <div class="pricez-item">
                        <?= $item['price'] ?>
                    </div>
                    <div class="view-item">
                        <?= $item['number'] ?>
                    </div>
                    <div class="Status-item">
                        <?= $item['thanhtien'] ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_bill_detail=<?= $item['id_bill_detail'] ?>">Xoá</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>