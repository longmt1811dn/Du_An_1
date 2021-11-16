<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title"><?= product_name($_GET['id_product']) ?> - Tất cả đánh giá</h4>
    </div>
    <div class="page-top_product">
        <div class="table-top-product">
            <div class="top-title">
                <div class="idz-top-title"><span>#</span></div>
                <div class="img-top-title"><span>Tiêu đề</span></div>
                <div class="name-top-title"><span>Nội dung đánh giá</span></div>
                <div class="pricez-top-title"><span>Ngày gửi</span></div>
                <div class="view-top-title"><span>Sao</span></div>
                <div class="status-top-title"><span>Người gửi</span></div>
                <div class="action-top-title">Hành động</div>
            </div>
            <?php foreach ($list as $item) { ?>
                <div class="item-top-title">
                    <div class="idz-item">
                        <?= $item['id_review'] ?>
                    </div>
                    <div class="img-item">
                        <?= $item['title'] ?>
                    </div>
                    <div class="name-item" style="word-wrap: break-word;">
                        <?= $item['content'] ?>
                    </div>
                    <div class="pricez-item">
                        <?= date("d/m/Y", strtotime($item['date'])) ?>
                    </div>
                    <div class="view-item" >
                        <?php
                            for($i = 0; $i < $item['star']; $i++){
                                echo "<i class='fas fa-star' style='color: #FFA500'></i>";
                            }
                        ?>
                    </div>
                    <div class="Status-item">
                        <?= users_name($item['id_user']) ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_review=<?= $item['id_review'] ?>">Xoá</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>