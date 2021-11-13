<?php require_once "../../dao/admin_product.php" ?>
<?php require_once "../../dao/admin_review.php" ?>
<?php require_once "../../dao/admin_news.php" ?>
<?php require_once "../../dao/admin_users.php" ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Trang chủ</h4>
    </div>
    <div class="page-list-total_box">
        <div class="page-item-total">
            <div class="img_page-item">
                <img src="../../assets/image/avt-username_admin.png" alt="" />
            </div>
            <div class="name_page-item">
                <p>Total product</p>
                <?php $total_product = product_countAll();
                foreach ($total_product as $total) { ?>
                    <span class="number-total"><?= $total['soLuong'] ?></span>
                <?php } ?>
            </div>
        </div>
        <div class="page-item-total">
            <div class="img_page-item">
                <img src="../../assets/image/avt-username_admin.png" alt="" />
            </div>
            <div class="name_page-item">
                <p>Total review</p>
                <?php $total_review = review_countAll();
                foreach ($total_review as $total) { ?>
                    <span class="number-total"><?= $total['soLuong'] ?></span>
                <?php } ?>
            </div>
        </div>
        <div class="page-item-total">
            <div class="img_page-item">
                <img src="../../assets/image/avt-username_admin.png" alt="" />
            </div>
            <div class="name_page-item">
                <p>Total posts</p>
                <?php $total_news = news_countAll();
                foreach($total_news as $total) { ?> 
                <span class="number-total"><?=$total['soLuong']?></span>
                <?php } ?>
            </div>
        </div>
        <div class="page-item-total">
            <div class="img_page-item">
                <img src="../../assets/image/avt-username_admin.png" alt="" />
            </div>
            <div class="name_page-item">
                <p>Total users</p>
                <?php $total_users = users_countAll();
                foreach($total_users as $total) { ?> 
                <span class="number-total"><?=$total['soLuong']?></span>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="page-top_product">
        <div class="rows-name-top">
            <h3>top 5 sản phẩm bán chạy nhất hiện nay</h3>
        </div>
        <div class="table-top-product">
            <div class="top-title">
                <div class="id-top-title"><span>#</span></div>
                <div class="name-top-title"><span>Name product</span></div>
                <div class="img-top-title"><span>Image</span></div>
                <div class="price-top-title"><span>Price</span></div>
                <div class="view-top-title"><span>View</span></div>
                <div class="status-top-title"><span>Status</span></div>
                <div class="action-top-title">Action</div>
            </div>
            <div class="item-top-title">
                <div class="id-item">
                    1
                </div>
                <div class="name-item">
                    Tên sản phẩm
                </div>
                <div class="img-item">
                    <img src="../../assets/image/dongho_aladin (8).jpeg" alt="" />
                </div>
                <div class="price-item">
                    72,000
                </div>
                <div class="view-item">
                    32
                </div>
                <div class="Status-item">
                    Hiện
                </div>
                <div class="action-item">
                    <a style="color: #333;" href="">Xoá</a>
                    <a style="color: #333;" href="./demo/update.html">Sửa</a>
                </div>
            </div>
        </div>
    </div>
</div>