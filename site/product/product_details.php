<?php
require_once "./dao/admin_comment.php";
if (isset($_GET['id_product']))  $id_product = $_GET['id_product'];
$detail = product_selectallOne($id_product);
extract($detail);
if (isset($_POST['submit-comment'])) {
  if (!isset($_SESSION['users'])) {
    echo '<script>window.location="?page=account&act=login";</script>';
  } else {
    $contentz = $_POST['content'];
    $title = $_POST['title'];
    $star = $_POST['star'];
    if (strlen($title) == "") {
      $thongbao = "Không được để trống Review";
    } else if (empty($star)) {
      $thongbao = "Vui lòng đánh giá";
    } else {
      comment_add($contentz, $title, $star, $_SESSION['users']['id_user'], $id_product);
    }
  }
}
?>
<main>
  <div class="main__nav">
    <div class="main__nav-name">
      <h2><?= $name_product ?></h2>
    </div>

  </div>
  <!-- main detail -->
  <div class="main__content">
    <div class="products">
      <div class="container">
        <div class="position-change">
          <div class="main__item">
            <div class="product__single">
              <div class="item__left">
                <div class="item__left-photo">
                  <a href="<?= $image ?>">
                    <div class="zoomWrapper">
                      <img src="<?= $image ?>" alt="">
                    </div>
                  </a>
                </div>
              </div>
              <div class="item__right">
                <h2 class="item__right--title"><?= $name_product ?></h2>

                <div class="item__right--view">
                  <p>
                    <label>Lượt xem :</label>
                    <span><?= $view ?></span>
                  </p>
                </div>
                <div class="item__right--infor">
                  <p class="product-vender">
                    <label>Brand :</label>
                    <span><?= product_getNameIDBRAND($id_brand) ?></span>
                  </p>
                  <p class="product-type">
                    <label>Product Type : </label>
                    <span><?= product_getNameIDTYPE($id_type) ?></span>
                  </p>
                </div>
                <div class="item__right--description">
                  <p><?= $describe ?></p>
                </div>

                <div class="item__right--material">
                  <div class="title text-y">Chất liệu :</div>
                  <div class="value">
                    <label><?= $material ?></label>
                  </div>

                </div>
                <div class="item__right--quality">

                  <div class="total-price">
                    <label for="" class="text-y">Giá :</label>
                    <span><?= number_format($price) ?> VND</span>
                  </div>
                </div>

                <div class="item__right--button">
                  <div class="add-to-wishlist">
                    <?php like_product_detail($id_product) ?>
                  </div>
                  <div style="margin-left: 3rem;" class="add-to-cart">
                    <form action="?page=account&act=cart" method="post">
                      <input type="hidden" name="name_product" value="<?= $name_product ?>">
                      <input type="hidden" name="id_product" value="<?= $id_product ?>">
                      <input type="hidden" name="price" value="<?= $price ?>">
                      <input type="hidden" name="image" value="<?= $image ?>">


                      <button style="cursor: pointer;" type="submit" name="add_cart"><i style="font-size: 3rem" class="fa fa-cart-plus">
                        </i></button>
                    </form>

                    <!-- <span id="AddToCartText">Thêm giỏ hàng</span> -->
                  </div>

                </div>


              </div>
            </div>

            <div class="product__description">

              <ul class="product__description--tab">
                <li><a class="current" href="#">Chi tiết sản phẩm</a></li>
              </ul>

              <div class="product__description--content">
                <?= $content ?>
              </div>

              <div class="product__description--reviews">
                <ul class="product__description--tab">

                  <li><a class="current" href="#">Đánh giá</a></li>
                </ul>

                <div class="container-comment">
                  <p><?php echo $thongbao ?></p>
                  <div class="show-comment">
                    <?php $listcomment = comment_selectallOne($id_product);
                    foreach ($listcomment as $list) { ?>
                      <div class="author">
                        <?php for ($i = 1; $i <= $list['star']; $i++) { ?>
                          <span style="color:#fcc43e; font-size: 1.5rem;" class="fa fa-star checked"></span>
                        <?php } ?>
                        <?php for ($j = 1; $j <= (5 - $list['star']); $j++) { ?>
                          <span style="font-size: 1.5rem;" class="fa fa-star"></span>
                        <?php } ?>
                        <h4>Tên: <?= comment_getNameUser($list['id_user']) ?></h4>
                        <h6>Ngày: <?= date("m-d-Y", strtotime($list['date'])) ?></h6>
                        <p>Nội dung: <?= $list['title'] ?></p>
                        <?php if ($_SESSION['users']['id_user'] == $list['id_user']) { ?>
                          <a onclick="return confirm('Bạn có muốn xoá đánh giá của mình?')" href="?page=product&act=deletecomment&id_review=<?= $list['id_review'] ?>&id_product=<?= $list['id_product'] ?>">Xoá</a>
                        <?php } ?>
                      </div> <?php } ?>


                  </div>
                  <div class="text-comment">
                    <p class="p-3">Viết nhận xét</p>
                    <form action="" class="form-submit-comment" method="post">
                      <div class="star">
                        <div class="star1">
                          <input type="radio" name="star" value="5" id="star5">
                          <label class="fas fa-star" for="star5"></label>

                          <input type="radio" name="star" value="4" id="star4">
                          <label class="fas fa-star" for="star4"></label>

                          <input type="radio" name="star" value="3" id="star3">
                          <label class="fas fa-star" for="star3"></label>

                          <input type="radio" name="star" value="2" id="star2">
                          <label class="fas fa-star" for="star2"></label>

                          <input type="radio" name="star" value="1" id="star1">
                          <label class="fas fa-star" for="star1"></label>
                        </div>

                      </div>
                      <div class="form-comment">
                        <label for="">Họ và tên</label>
                        <input type="text" name="title" placeholder="Tên của bạn">
                      </div>
                      <div class="form-comment">
                        <label for="">Nội dung đánh giá</label>
                        <textarea name="content" placeholder="Nội dung đánh giá của bạn" id="" cols="30" rows="10"></textarea>
                      </div>

                      <div class="btn-review">
                        <input type="submit" name="submit-comment" class="btn-cart" value="Gửi đánh giá sản phẩm">
                      </div>
                    </form>


                  </div>
                </div>

              </div>
            </div>

            <div class="product__related">
              <div class="product__related--title">
                <h4>SẢN PHẨM TƯƠNG TỰ</h4>
                <h2>BỘ SƯU TẬP NÀY</h2>
              </div>
              <div class="product__related--container">
                <div class="container-rl">
                  <div class="list-item">

                    <?php $list = product_likeBrand($id_brand, $id_product); ?>
                    <?php foreach ($list as $item) { ?>

                      <div class="product">
                        <div class="product__img">
                          <div class="imgOverlay">
                            <img src="<?= $item['image'] ?>" alt="">
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
                            <span class="price"><?= number_format($item['price']) ?></span>
                            <!-- <span class="starrating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                            </span> -->
                          </div>
                          <!-- <div class="product__detail-sale"><span><?= number_format($item['price']) ?></span></div> -->
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

                    <?php } ?>

                    <!--                    <div class="product">
                      <div class="product__sale">
                        <span class="product__sale-p">Sale</span>
                      </div>
                      <div class="product__img">
                        <div class="imgOverlay">
                          <img src="https://cdn.shopify.com/s/files/1/0075/1832/2770/products/Watch5_0f753270-74d5-471c-b694-5f55d31a0f0e_large.png?v=1562222675" alt="">
                        </div>
                        <div class="product__img-button">
                          <a href="#" class="compare" title="Compare Product"><i class="far fa-chart-bar"></i></a>
                          <a href="#" class="compare" title="Quick View"><i class="far fa-eye"></i></a>
                          <a href="#" class="compare" title="Product Link"><i class="fas fa-link"></i></a>
                          <a href="#" class="compare" title="Add to wishlist"><i class="fas fa-heart"></i></a>
                        </div>
                      </div>
                      <div class="product__detail">
                        <div class="product__detail-title">
                          <a href="">Analog Numeral</a>
                        </div>
                        <div class="product__detail-price">
                          <span class="price">$250.00 <s style="font-size:1.7rem">$300.00</s></span>
                          <span class="starrating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </span>
                        </div>
                        <div class="product__detail-sale"><span>Ex to Sale Tax</span></div>
                        <div class="product__detail-cart">
                          <a href="" class="btn-cart"><i class="fas fa-shopping-cart"></i>Add to cart</a>
                        </div>
                      </div>
                    </div>-->

                  </div>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</main>