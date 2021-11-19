    <main class="main">
      <nav class="collection__nav">
        <div class="collection__nav-text center-center">
          <h1>Digital</h1>
          <a href="index.html" class="text__gray">Trang chủ </a><span class="text__gray">/</span>
          <span class="text__gray">Digital</span>
        </div>
      </nav>
      <div class="collection__show">
        <div class="collection__show-option">
          <div class="collection__option-layout">
            <button class="btn collection__layout-btn">
              <i class="fas fa-th-large"></i>
            </button>
            <button class="btn btn collection__layout-btn">
              <i class="fas fa-th-list"></i>
            </button>
          </div>

          <div class="collection__show-sort">
            <span class="text__gray">Lọc theo</span>
            <form action="">
              <select class="btn sort__select" name="" id="">
                <option value="">A-Z</option>
                <option value="">Z-A</option>
                <option value="">Cũ nhất</option>
                <option value="">Mới nhất</option>
              </select>
            </form>
          </div>
        </div>
        <div class="main__store collection__show-product">
          <div class="container collection__product-container">
            <div class="main__store-list">
              <div class="container collection__product-container">
                <div class="list-item collection__product-list" id="collection__product-list">
                  <!-- HIện sản phẩm bằng js -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="./assets/js/product-list.js"></script>