    <main class="main">
      <nav class="collection__nav">
        <div class="collection__nav-text center-center">
          <h1>Thương hiệu sản phẩm</h1>
        </div>
      </nav>

      <div class="all-collection__show all-collection__container" id="all-collection__show">
      
      <?php foreach ($listBrand as $item) { ?>
          
      <!-- Xuất item -->
      <div class="all-collection__show-item">
      <div class="all-collection__item-img">
            <a href="./collection.html"><img src="https://casiovietnam.net/upload/a168wg-9wdf-600.jpg" alt="No Image"></a>
      </div>

      <div class="all-collection__item-detail">
            <p class="text__gray"><?= $item['name_brand'] ?></p>
            <span class="text__gray">10 Items</span>
            <button class="btn">
                    <a href="collection.html">Xem tất cả</a>
            </button>
      </div>
      </div>

      <?php } ?>
      
      </div>
    </main>