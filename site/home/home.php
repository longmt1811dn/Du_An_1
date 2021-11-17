

<main class="main">

      <div class="slider">
          <div class="owl-carousel owl-theme">              
                  <div class="item">
                      <img src="./assets/image/banner (1).jpg" alt="">
                      <div class="item__content">
                          <div class="border-title">
                             <h2 class="title binding">Alertzy </h2>
                          </div>
                          <div class="inner-block">
                              <h5>Exclusive Offer -20% Off This Week</h5>
                              <p>Expanding the offering is the choice between a leather strap or a metal bracelet, bringing the total new look. Black-tone stainless steel case with a black rubber strap. Scratch free sapphire crystal.</p>
                              <div class="block-price">
                                <p>Starting @ <span class="price">$ 250.00</span></p>
                              </div>
                              <a href="#" class="slider-button btn-sl">Explore services</a>
                          </div>
                      </div>
                  </div>

                  <div class="item">
                      <img src="./assets/image/banner (3).jpg" alt="">
                      <div class="item__content2">
                          <div class="border-title">
                             <h2 class="title binding">Gertious </h2>
                          </div>
                          <div class="inner-block">
                              <h5>Exclusive of Sales Tax</h5>
                              <p>The watch bracelet gives a much far colder personality.Dress watch style. Swiss made luxury watch. Stainless steel case with a brown leather strap. Scratch resistant sapphire crystal. </p>
                              <div class="block-price">
                                <p><span class="price">$ 250.00</span><s class="sale">$ 320.00</s></p>
                              </div>
                              <a href="#" class="btn-sl2 slider-button">Explore services</a>
                          </div>
                      </div>
                  </div>

                  <div class="item">
                      <img src="./assets/image/banner (2).jpg" alt="">
                      <div class="item__content3">
                          <div class="border-title">
                             <h2 class="title binding">New Release</h2>
                             <p>2019</p>
                          </div>
                          <div class="inner-block">    
                              <p>One of the most advanced watch released during 2019. True style that always remains in fashion. Timepiece is the perfect complement to any outfit.</p>   
                          </div>
                         <a href="#" class="btn-sl slider-button">Explore</a>
                      </div>
                  </div>                 
          </div>           
      </div>
   
      <div class="flash-sale">
      <div class="container-fs">
        <div class="feature-items">
          <div class="item">
            <div class="item__overlay">
              <a href="#">
                <img src="./assets/image/banner_overplay (1).jpg" alt="" />
                <div class="overly">   </div>
              </a>
              <div class="item__overlay-content" >
                  <h5>Flash Sale</h5>
                  <h3>Men's Watch</h3>
                  <p>25% Discount</p>
                </div>
            </div>
          </div>
          <div class="item">
            <div class="item__overlay">
              <a href="#">
                <img src="./assets/image/banner_overplay (1).png" alt="" />
                <div class="overly"> </div>
              </a>
              <div class="item__overlay-content2">
                  <h5 style="color: white;">Flash Sale</h5>
                  <h3>Men's Watch</h3>
                  <p>25% Discount</p>
                </div>
            </div>
          </div> 
          <div class="item">
            <div class="item__overlay">
              <a href="#">
                <img src="./assets/image/banner_overplay (2).png" alt="" />
                <div class="overly"> </div>
              </a>
              <div class="item__overlay-content3">
                  <h5 style="color:white">Flash Sale</h5>
                  <h3>Men's Watch</h3>
                  <p>25% Discount</p>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="main__store">
        <div class="container">
            <div class="main__store-title text-ct"><h2>Sản phẩm nổi bật</h2></div>

            <div class="main__store-list">`
              <div class="container">
                <div class="list-item">
                 
                  <?php foreach ($list_highlights as $itemsProduct) { ?>
                    <div class="product">

                    <?php if ($itemsProduct["promotion"]>0 ) { ?>
                      <div class="product__sale">
                        <span class="product__sale-p">Sale</span>
                      </div> 
                    <?php } ?>

                     <div class="product__img">
                       <div class="imgOverlay">
                         <img src= "../<?= $itemsProduct["image"]?>" alt="">
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
                         <a href=""><?= $itemsProduct["name_product"]?></a>
                       </div>
                       <div class="product__detail-price">
                         <?php if ($itemsProduct["promotion"]>0 ) { ?>


                         <span class="price"><?= number_format($itemsProduct["price"] - ($itemsProduct["price"]/100 * $itemsProduct["promotion"]))?> VND                                                      
                          <br>
                         <s style="font-size:1.7rem"><?= number_format($itemsProduct["price"])?> VND</s>
                         </span>
                         <?php } else { ?>
                          <span class="price"><?= number_format($itemsProduct["price"])?> VND 
                                                                                                      
                         </span>
      
                         
                         <?php } ?>
                         <span class="starrating">
                            <?php for($i = 0; $i < $itemsProduct["star"];$i++) { ?>
                            <i class="fas fa-star"></i>
                            <?php } ?>

                          </span>
                       </div>                     
                       <div class="product__detail-sale"><span>Ex to Sale Tax</span></div>
                       <div class="product__detail-cart">
                         <a href="" class="btn-cart"><i class="fas fa-shopping-cart"></i>Add to cart</a>
                       </div>
                     </div>
                    </div>                  
                  <?php } ?>
                  <!-- <div class="product">
                     <div class="product__sale">
                       <span class="product__sale-p">Sale</span>
                     </div>
                     <div class="product__img">
                       <div class="imgOverlay">
                         <img src="./assets/image/dongho_orient (2).png" alt="">
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
                  </div>  -->

                  

                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="main__products">
        <div class="banner-type-5-block">
            <div class="container">
                <div class="main__products-tittle">
                    <h2>Most wanted of the year</h2>
                </div>
                <div class="main__products-expired">
                  Expired
                </div>
                <div class="main__products-content">
                  <a href="" class="btn-sn">Shop now</a>
                </div>
            </div>
        </div>
      </div>
    
      <div class="main__products2">
        <div class="container">
          <div class="wrapper">
            <div class="item__block">
                <div class="item__block-title">
                  <h2>Roman or Numeral</h2>
                </div>
                <div class="item__block-para">
                  <p>Limited Edition of 200 pieces world-wide. Watch Big Bang, 361.PE.2010.RW.1104 
                    The stainless steel case and band are thick and prominent, creating a durable feel on the wrist. However, the dial is much more whimsical.
                  </p>
                </div>
                <div class="item__block-para2">
                  <p>Accurate and Comfortable Imported Japanese quartz movement ensures precise time keeping.  Its classic design of multi display watches and comfortable silicone material can provide to users excellent outdoor experiences.</p>
                </div>
                <div class="item__block-btn">
                  <a href="" class="btn-sn">Shop now</a>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main__introduct flex-3col">
        <div class="main__introduct-img">
          <img src="./assets/image/img_title (1).jpg" alt="" />
          <div class="main__introduct-info">
            <h2 class="main__info-title title__borderbottom">Versits</h2>
            <p class="main__info-text text__gray">
              Donec sodales sagittis magna. Sed consequat, leo eget bibendum
              sodales, augue velit cursus nunc.uis leo. Sed fringilla mauris sit
              amet nibh.
            </p>
            <button class="btn main__info-btn">
              <a href="#" class="">View all products</a>
            </button>
          </div>
        </div>

        <div class="main__introduct-img">
          <img src="./assets/image/img_title (2).jpg" alt="" />
          <div class="main__introduct-info">
            <h2 class="main__info-title title__borderbottom">Versits</h2>
            <p class="main__info-text text__gray">
              Donec sodales sagittis magna. Sed consequat, leo eget bibendum
              sodales, augue velit cursus nunc.uis leo. Sed fringilla mauris sit
              amet nibh.
            </p>
            <button class="btn main__info-btn">
              <a href="#" class="">View all products</a>
            </button>
          </div>
        </div>

        <div class="main__introduct-img">
          <img src="./assets/image/img_title (3).jpg" alt="" />
          <div class="main__introduct-info">
            <h2 class="main__info-title title__borderbottom">Versits</h2>
            <p class="main__info-text text__gray">
              Donec sodales sagittis magna. Sed consequat, leo eget bibendum
              sodales, augue velit cursus nunc.uis leo. Sed fringilla mauris sit
              amet nibh.
            </p>
            <button class="btn main__info-btn">
              <a href="#" class="">View all products</a>
            </button>
          </div>
        </div>

        <div class="main__introduct-img">
          <img src="./assets/image/img_title (4).jpg" alt="" />
          <div class="main__introduct-info">
            <h2 class="main__info-title title__borderbottom">Versits</h2>
            <p class="main__info-text text__gray">
              Donec sodales sagittis magna. Sed consequat, leo eget bibendum
              sodales, augue velit cursus nunc.uis leo. Sed fringilla mauris sit
              amet nibh.
            </p>
            <button class="btn main__info-btn">
              <a href="#" class="">View all products</a>
            </button>
          </div>
        </div>

        <div class="main__introduct-img">
          <img src="./assets/image/img_title (5).jpg" alt="" />
          <div class="main__introduct-info">
            <h2 class="main__info-title title__borderbottom">Versits</h2>
            <p class="main__info-text text__gray">
              Donec sodales sagittis magna. Sed consequat, leo eget bibendum
              sodales, augue velit cursus nunc.uis leo. Sed fringilla mauris sit
              amet nibh.
            </p>
            <button class="btn main__info-btn">
              <a href="#" class="">View all products</a>
            </button>
          </div>
        </div>

        <div class="main__introduct-img">
          <img src="./assets/image/img_title (6).jpg" alt="" />
          <div class="main__introduct-info">
            <h2 class="main__info-title title__borderbottom">Versits</h2>
            <p class="main__info-text text__gray">
              Donec sodales sagittis magna. Sed consequat, leo eget bibendum
              sodales, augue velit cursus nunc.uis leo. Sed fringilla mauris sit
              amet nibh.
            </p>
            <button class="btn main__info-btn">
              <a href="#" class="">View all products</a>
            </button>
          </div>
        </div>
      </div>

      <div class="main__category">
        <div class="category__container">
          <h2 class="category__container-title title__borderbottom">
            Product Categories
          </h2>

          <ul class="category__container-menu">
            <li><a href="#">Classico</a></li>
            <li><a href="#">Executive</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Dialer</a></li>
          </ul>

          <div class="category__container-list">
            <div class="container__list-item">
              <div class="container__item-img">
                <img src="./assets/image/dongho_orient (2).png" alt="" />
              </div>
              <p class="product__text">Black Dial</p>
            </div>

            <div class="container__list-item">
              <div class="container__item-img">
                <img src="./assets/image/dongho_orient (2).png" alt="" />
              </div>
              <p class="product__text">Black Dial</p>
            </div>

            <div class="container__list-item">
              <div class="container__item-img">
                <img src="./assets/image/dongho_orient (2).png" alt="" />
              </div>
              <p class="product__text">Black Dial</p>
            </div>

            <div class="container__list-item">
              <div class="container__item-img">
                <img src="./assets/image/dongho_orient (2).png" alt="" />
              </div>
              <p class="product__text">Black Dial</p>
            </div>

            <div class="container__list-item">
              <div class="container__item-img">
                <img src="./assets/image/dongho_orient (2).png" alt="" />
              </div>
              <p class="product__text">Black Dial</p>
            </div>
          </div>
        </div>
      </div>

      <div class="main__blog">
        <div class="main__blog-title">
          <h2 class="title__borderbottom">Recent Blog</h2>
        </div>

        <div class="main__blog-post">
          <div class="main__post">
            <div class="main__post-img">
              <a href="#"
                ><img src="./assets/image/img_blog (2).jpg" alt=""
              /></a>
            </div>

            <div class="main__post-text">
              <p class="product__text">Dive Water with Watches</p>
              <span class="text__gray">Jul 04 , 2019</span>
            </div>

            <div class="main__post-button">
              <button class="btn main__post-btn">
                <a href="#" class="">Read More</a>
              </button>
            </div>
          </div>

          <div class="main__post">
            <div class="main__post-img">
              <a href="#"
                ><img src="./assets/image/img_blog (2).jpg" alt=""
              /></a>
            </div>

            <div class="main__post-text">
              <p class="product__text">Dive Water with Watches</p>
              <span class="text__gray">Jul 04 , 2019</span>
            </div>

            <div class="main__post-button">
              <button class="btn main__post-btn">
                <a href="#" class="">Read More</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>

