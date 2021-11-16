<?php require_once "../../dao/admin_items.php"; ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Thống kê mặt hàng</h4>
    </div>
    <div class="page-top_items">
        <div class="table-top-items">
            <div class="items-top-title">
                <div class="id-top-title"><span>#</span></div>
                <div class="name-top-title"><span>Tên thương hiệu</span></div>
                <div class="total-top-title"><span>Tổng</span></div>
                <div class="price-top-title"><span>Giá thấp nhất</span></div>
                <div class="price-top-title"><span>Trung bình giá</span></div>
                <div class="price-top-title"><span>Giá lớn nhất</span></div>
            </div>
            <?php $listitems = items_thongke();
            foreach ($listitems as $list) { ?>
                <div class="item-top-title">
                    <div class="id-item">
                        <?= $list['id_brand'] ?>
                    </div>
                    <div class="name-item">
                        <?= $list['name_brand'] ?>
                    </div>
                    <div class="total-item">
                        <?= $list['soLuong'] ?>
                    </div>
                    <div class="price-item">
                        <?= number_format($list['price_min']) ?>
                    </div>
                    <div class="price-item">
                        <?= number_format($list['price_avg']) ?>
                    </div>
                    <div class="price-item">
                        <?= number_format($list['price_max']) ?>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>

</div>