<div class="admin-main_page">
            <div class="page-title_box">
                <h4 class="page-title">Danh sách</h4>
            </div>
            <div class="page-top_product">
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
                    <?php $listprod = product_listall(); ?>
                    <?php foreach ($listprod as $list) { ?>
                        <div class="item-top-title">
                            <div class="id-item">
                                <p><?= $list['id_product'] ?></p>
                            </div>
                            <div class="name-item">
                                <p><?= $list['name_product'] ?></p>
                            </div>
                            <div class="img-item">
                                <img src="../../../<?= $list['image'] ?>" alt="" />
                            </div>
                            <div class="price-item">
                                <p><?= number_format($list['price']) ?></p>
                            </div>
                            <div class="view-item">
                                <p><?= $list['view'] ?></p>
                            </div>
                            <div class="Status-item">
                                <p><?= ($list['hide'] == 1) ? "Hiện" : "Ẩn"  ?></p>
                            </div>
                            <div class="action-item">
                                <a href="">Xoá</a>
                                <a href="./update.html">Sửa</a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="item-top-title">
                        <div class="id-item">
                            <p>2</p>
                        </div>
                        <div class="name-item">
                            <p>Đồng hồ Ozaqua Tokudo 900</p>
                        </div>
                        <div class="img-item">
                            <img src="../assets/image/dongho_aladin (2).jpeg" alt="" />
                        </div>
                        <div class="price-item">
                            <p>12,000,000</p>
                        </div>
                        <div class="view-item">
                            <p>322</p>
                        </div>
                        <div class="Status-item">
                            <p>Hiện</p>
                        </div>
                        <div class="action-item">
                            <a href="">Xoá</a>
                            <a href="./update.html">Sửa</a>
                        </div>
                    </div>
                    <div class="item-top-title">
                        <div class="id-item">
                            <p>3</p>
                        </div>
                        <div class="name-item">
                            <p>Đồng hồ Rolex Hào Quang 1200</p>
                        </div>
                        <div class="img-item">
                            <img src="../assets/image/dongho_aladin (1).jpeg" alt="" />
                        </div>
                        <div class="price-item">
                            <p>100,172,000</p>
                        </div>
                        <div class="view-item">
                            <p>123</p>
                        </div>
                        <div class="Status-item">
                            <p>Hiện</p>
                        </div>
                        <div class="action-item">
                            <a href="">Xoá</a>
                            <a href="./update.html">Sửa</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page_phantrang">
                <a class="page_num activex" href="">1</a>
                <a class="page_num" href="">2</a>
                <a class="page_num" href="">3</a>
            </div>
        </div>