    <main class="main">
      <nav class="collection__nav">
        <div class="collection__nav-text center-center">
          <h1><?= product_getNameType($idType) ?></h1>
        </div>
      </nav>
      <div class="collection__show">
        <div class="collection__show-option">
          <div class="collection__option-layout">

          </div>

          <div class="collection__show-sort">
            <!-- <span class="text__gray">Lọc theo</span> -->
            <!-- <form action="">
              <select class="btn sort__select" name="" id="">
                <option value="">A-Z</option>
                <option value="">Z-A</option>
                <option value="">Cũ nhất</option>
                <option value="">Mới nhất</option>
              </select>
            </form> -->
          </div>
        </div>
        <div class="main__store collection__show-product">
          <div class="container collection__product-container">
            <div class="main__store-list">
              <div class="container collection__product-container">
                <div class="list-item collection__product-list" id="collection__product-list">

                  <!-- Hiện sản phẩm -->

                  <?php foreach ($listProduct as $item) { ?>

                    <div class="product">
                      <div class="product__collection">
                        <div class="product__img">
                          <div class="imgOverlay">
                            <img src="<?= $item['image'] ?>" alt="No_Image" />
                          </div>
                          <div class="product__img-button">
                            <a href="index.php?page=product&act=pd&id_product=<?= $item['id_product'] ?>" class="compare" title="Quick View"><i class="far fa-eye"></i></a>
                            <?php like_product_btn($item['id_product']) ?>

                          </div>
                        </div>
                        <div class="product__detail">
                          <div class="product__detail-title">
                            <a href="?page=product&act=pd&id_product=<?= $item['id_product'] ?>"><?= $item['name_product'] ?></a>
                          </div>
                          <div class="product__detail-price">
                            <span class="price"><?= number_format($item['price']) ?> vnđ</span>
                            <!-- <span class="starrating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                            </span> -->
                          </div>
                          <div class="product__detail-sale">
                            <span><?= date("d/m/Y", strtotime($item['date'])) ?></span>
                          </div>
                          <div class="product__detail-sale">
                            <span>Lượt xem: <?= $item['view'] ?></span>
                          </div>
                          <div class="product__detail-cart">
                            <form action="?page=account&act=cart" method="post">
                              <input type="hidden" name="name_product" value="<?= $item["name_product"] ?>">
                              <input type="hidden" name="id_product" value="<?= $item["id_product"] ?>">
                              <input type="hidden" name="price" value="<?= $item["price"] ?>">
                              <input type="hidden" name="image" value="<?= $item["image"] ?>">


                              <button style="cursor: pointer;" type="submit" name="add_cart" class="btn-cart"><i class="fas fa-shopping-cart"></i>Mua sản phẩm</button>
                            </form>
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

      <?php type_colectionAllPagination($idType) ?>

    </main>