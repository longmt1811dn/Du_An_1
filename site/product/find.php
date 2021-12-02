<?php
$tuKhoaTimKiem = trim(strip_tags($_GET['tuKhoaTimKiem']));
if ($tuKhoaTimKiem != "") $listProductByKeyWord  = product_select_by_name($tuKhoaTimKiem);
else $listProductByKeyWord  = NULL;
?>
<main class="main">
        <nav class="collection__nav">
                <div class="collection__nav-text center-center">
                        <h1>Tìm kiếm</h1>
                </div>
        </nav>

        <div class="search__box">

                <div class="form__search">
                        <h3 class="title__borderbottom form__search-title">Từ khóa tìm kiếm : <?= $tuKhoaTimKiem ?>
                        </h3>
                </div>

                <div class="main__store collection__show-product">
                        <div class="container collection__product-container">
                                <div class="main__store-list">
                                        <div class="container collection__product-container">
                                                <div class="list-item collection__product-list" id="collection__product-list">

                                                        <!-- Hiện sản phẩm -->

                                                        <?php foreach ($listProductByKeyWord as $item) { ?>

                                                                <div class="product">
                                                                        <div class="product__collection">
                                                                                <div class="product__img">
                                                                                        <div class="imgOverlay">
                                                                                                <img src="<?= $item['image'] ?>" alt="No_Image" />
                                                                                        </div>
                                                                                        <div class="product__img-button">
                                                                                                <a href="#" class="compare" title="Quick View"><i class="far fa-eye"></i></a>

                                                                                                <?php like_product_btn($item['id_product']) ?>

                                                                                        </div>
                                                                                </div>
                                                                                <div class="product__detail">
                                                                                        <div class="product__detail-title">
                                                                                                <a href="?page=product&act=pd&id_product=<?= $item['id_product'] ?>"><?= $item['name_product'] ?></a>
                                                                                        </div>
                                                                                        <div class="product__detail-price">
                                                                                                <span class="price"><?= number_format($item['price']) ?> vnđ</span>
                                                                                                <span class="starrating">
                                                                                                        <i class="fas fa-star"></i>
                                                                                                        <i class="fas fa-star"></i>
                                                                                                        <i class="fas fa-star"></i>
                                                                                                        <i class="fas fa-star"></i>
                                                                                                        <i class="fas fa-star"></i>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div class="product__detail-sale">
                                                                                                <span><?= date("d/m/Y", strtotime($item['date'])) ?></span>
                                                                                        </div>
                                                                                        <div class="product__detail-sale">
                                                                                                <span>Lượt xem: <?= $item['view'] ?></span>
                                                                                        </div>
                                                                                        <div class="product__detail-cart">
                                                                                                <a href="" class="btn-cart"><i class="fas fa-shopping-cart"></i>Mua sản phẩm</a>
                                                                                        </div>
                                                                                </div>

                                                                        </div>
                                                                </div>

                                                        <?php } ?>

                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</main>