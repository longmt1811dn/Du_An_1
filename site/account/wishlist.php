<main class="main">
      <nav class="collection__nav">
        <div class="collection__nav-text center-center">
          <h1>Yêu thích</h1>
        </div>
      </nav>

      <div class="wishlist__container">
        <table class="wishlist__container-table">
          <tr class="wishlist__table-head">
            
            <td class="wishlist__head-name"><span>Tên sản phẩm</span></td>
            <td class="wishlist__head-img"><span>Hình ảnh</span></td>
            <td class="wishlist__head-price"><span>Giá (VNĐ)</span></td>
            
            <td class="wishlist__head-view"><span>Xem sản phẩm</span></td>
            <td class="wishlist__head-stock"><span>Bỏ thích</span></td>
          </tr>

          <?php foreach ($list as $item) {?>
          <?php $product = product_selectOne($item['id_product']) ?>
          <tr class="wishlist__table-head">
            
            <td class="wishlist__head-name"><span><?= $product['name_product'] ?></span></td>
            <td class="wishlist__head-img">
              <a href=""
                 ><img src="<?= $product['image'] ?>" alt=""
              /></a>
            </td>
            <td class="wishlist__head-price"><span><?= number_format($product['price']) ?></span></td>
            <td class="wishlist__head-view">
              <span><button class="btn">Xem chi tiết</button></span>
            </td>
            <td class="wishlist__head-stock"><span><button class="btn"><a href="index.php?page=product&act=al&id=<?= $item['id_product'] ?>">Bỏ</a></button></span></td>
            
          </tr>

          <?php } ?>
          
        </table>
      </div>
    </main>