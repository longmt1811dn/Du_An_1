<?php require_once "../../dao/admin_news.php" ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách</h4>
    </div>
    <div class="page-top_news">
        <div class="table-top-news">
            <div class="news-top-title">
                <div class="id-top-title"><span>#</span></div>
                <div class="name-top-title"><span>Title</span></div>
                <div class="date-top-title"><span>Date</span></div>
                <div class="status-top-title"><span>Status</span></div>
                <div class="highlights-top-title">Highlights</div>
                <div class="image_new-top-title">Image</div>
                <div class="user-top-title"><span>User</span></div>
                <div class="action-top-title">Action</div>
            </div>

            <?php $listnew = news_listall();
            foreach ($listnew as $list) { ?>
                <div class="news-item-top-title">
                    <div class="id-item">
                        <?= $list['id_news'] ?>
                    </div>
                    <div class="name-item">
                        <?= $list['title'] ?>
                    </div>
                    <div class="date-item">
                        <?= date("d-m-Y", strtotime($list['date'])) ?>
                    </div>
                    <div class="status-item">
                        <?= ($list['hide'] == 1) ? "Hiện" : "Ẩn" ?>
                    </div>
                    <div class="highlights-item">
                        <?= ($list['highlights'] == 0) ? "Không" : "Có" ?>
                    </div>
                    <div class="image_new-item">
                        <?php
                        if (strlen($list['image_new']) == 0) {
                            echo "Không có hình ảnh hoặc đường dẫn sai";
                        } else { ?>
                            <img src="../../../<?= $list['image_new'] ?>" alt="">
                        <?php  }  ?>
                    </div>
                    <div class="user-item">
                        <?= news_getNameUser($list['id_user']) ?>
                    </div>
                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_news=<?= $list['id_news'] ?>">Xoá</a>
                        <a class="admin__btn-update" href="?edit&id_news=<?= $list['id_news'] ?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>