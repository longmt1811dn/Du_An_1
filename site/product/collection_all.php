    <main class="main">
      <nav class="collection__nav">
        <div class="collection__nav-text center-center">
          <h1>Thương hiệu sản phẩm</h1>
        </div>
      </nav>

      <div class="all-collection__show all-collection__container" id="all-collection__show">
      
      <?php foreach ($listBrand as $item) { ?>
      <?php if(product_countIdBrand($item['id_brand']) > 0) { ?>
          
      <!-- Xuất item -->
      <div class="all-collection__show-item">
      <div class="all-collection__item-img">
            <a href="./collection.html"><img src="<?= product_imageIdBrand($item['id_brand']) ?>" alt="No Image"></a>
      </div>

      <div class="all-collection__item-detail">
            <p class="text__gray"><?= $item['name_brand'] ?></p>
            <span class="text__gray"><?= product_countIdBrand($item['id_brand']) ?> Sản phẩm</span>
            <button class="btn">
                    <a href="index.php?page=product&act=collection&id=<?= $item['id_brand'] ?>">Xem tất cả</a>
            </button>
      </div>
      </div>

      <?php }} ?>
      
      </div>
        
        <?php brand_colectionAllPagination(); ?>
    </main>