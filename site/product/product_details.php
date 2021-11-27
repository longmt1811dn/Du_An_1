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
      <h2>Analog Numeral</h2>
      <a href="#">Home</a>
      <span>/</span>
      <a href="#">Gold Case</a>
      <span>/</span>
      <span>Analog Numeral</span>
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
                <div class="item__right--price">
                  <span>Giá: <?= number_format($price) ?></span>
                </div>
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
                <div class="item__right--color">
                  <div class="title">Color :</div>
                  <div class="swatch-section">
                    <div class="swatch-section--white">
                      <label for="">
                        <span class="bgImg"></span>
                      </label>
                    </div>
                    <div class="swatch-section--gray">
                      <label for="">
                        <span class="bgImg"></span>
                      </label>
                    </div>
                    <div class="swatch-section--black">
                      <label for="">
                        <span class="bgImg"></span>
                      </label>
                    </div>
                    <div class="swatch-section--sandal">
                      <label for="">
                        <span class="bgImg"></span>
                      </label>
                    </div>
                    <div class="swatch-section--blue">
                      <label for="">
                        <span class="bgImg"></span>
                      </label>
                    </div>

                  </div>
                </div>
                <div class="item__right--material">
                  <div class="title text-y">Chất liệu :</div>
                  <div class="value">
                    <label><?= $material ?></label>
                  </div>

                </div>
                <div class="item__right--quality">
                  <div class="quality-box">
                    <label class="title text-y">Số lượng :</label>
                    <div class="quality-width">
                      <div class="wrapper">
                        <div class="dec_button">-</div>
                        <input type="number" id="quality" value="1" min="1" name="quality">
                        <div class="dec_button">+</div>
                      </div>
                    </div>
                  </div>
                  <div class="total-price">
                    <label for="" class="text-y">Tổng tiền :</label>
                    <span><?= number_format($price) ?></span>
                  </div>
                </div>

                <div class="item__right--button">
                  <div class="add-to-cart">
                    <i class="fa fa-cart-plus">
                      <span id="AddToCartText">Thêm giỏ hàng</span>
                    </i>
                  </div>
                  <div class="add-to-wishlist">
                    <a href="">
                      <i class="far fa-heart">
                        <span id="AddToWissh">Yêu thích</span>
                      </i>
                    </a>
                  </div>
                  <div class="buy-it-now">
                    <span>Mua ngay</span>
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
                      <?php if($_SESSION['users']['id_user'] == $list['id_user']){ ?>
                        <a onclick="return confirm('Bạn có muốn xoá đánh giá của mình?')" href="?page=product&act=deletecomment&id_review=<?= $list['id_review'] ?>&id_product=<?= $list['id_product'] ?>">Xoá</a>
                        <?php } ?>
                      </div> <?php } ?>


                  </div>
                  <div class="text-comment">
                    <p class="p-3">Write a review</p>
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
                        <label for="">Review</label>
                        <input type="text" name="title" placeholder="Enter your name">
                      </div>
                      <div class="form-comment">
                        <label for="">Body of Review</label>
                        <textarea name="content" placeholder="Write comment" id="" cols="30" rows="10"></textarea>
                      </div>

                      <div class="btn-review">
                        <input type="submit" name="submit-comment" class="btn-cart" value="Submit review">
                      </div>
                    </form>


                  </div>
                </div>

              </div>
            </div>

            <div class="product__related">
              <div class="product__related--title">
                <h4>Related Products</h4>
                <h2>From this Collection</h2>
              </div>
              <div class="product__related--container">
                <div class="container-rl">
                  <div class="list-item">

                    <div class="product">
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
                          <span class="price">$750.00</span>
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
                    </div>

                    <div class="product">
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
                    </div>

                    <div class="product">
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
                    </div>

                    <div class="product">
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
                          <span class="price">$750.00</span>
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
                    </div>

                  </div>

                </div>
              </div>
            </div>

            <div class="product__recently">
              <div class="product__recently--title">
                <h2>Recently Viewed Products</h2>
              </div>
              <div class="product__related--container">
                <div class="container-rl">
                  <div class="list-item">

                    <div class="product">
                      <div class="product__img">
                        <img src="https://cdn.shopify.com/s/files/1/0075/1832/2770/products/Watch5_0f753270-74d5-471c-b694-5f55d31a0f0e_large.png?v=1562222675" alt="">
                      </div>
                      <div class="product__detail">
                        <div class="product__detail-title">
                          <a href="">Analog Numeral</a>
                        </div>
                        <div class="product__detail-price">
                          <span class="price">$750.00</span>
                        </div>
                        <div class="product__detail-cart">
                          <a href="" class="btn-cart"><i class="fas fa-shopping-cart"></i>Select options</a>
                        </div>
                      </div>
                    </div>
                    <div class="product">
                      <div class="product__img">
                        <img src="https://cdn.shopify.com/s/files/1/0075/1832/2770/products/Watch5_0f753270-74d5-471c-b694-5f55d31a0f0e_large.png?v=1562222675" alt="">
                      </div>
                      <div class="product__detail">
                        <div class="product__detail-title">
                          <a href="">Analog Numeral</a>
                        </div>
                        <div class="product__detail-price">
                          <span class="price">$750.00</span>
                        </div>
                        <div class="product__detail-cart">
                          <a href="" class="btn-cart"><i class="fas fa-shopping-cart"></i>Select options</a>
                        </div>
                      </div>
                    </div>
                    <div class="product">
                      <div class="product__img">
                        <img src="https://cdn.shopify.com/s/files/1/0075/1832/2770/products/Watch5_0f753270-74d5-471c-b694-5f55d31a0f0e_large.png?v=1562222675" alt="">
                      </div>
                      <div class="product__detail">
                        <div class="product__detail-title">
                          <a href="">Analog Numeral</a>
                        </div>
                        <div class="product__detail-price">
                          <span class="price">$750.00</span>
                        </div>
                        <div class="product__detail-cart">
                          <a href="" class="btn-cart"><i class="fas fa-shopping-cart"></i>Select options</a>
                        </div>
                      </div>
                    </div>

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