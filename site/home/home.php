

<main class="main">

      <div class="slider">
          <div class="owl-carousel owl-theme">              
                  <div class="item">
                      <img src="./assets/image/banner (1).jpg" alt="">
                      <div class="item__content">
                          <div class="border-title">
                             <h2 class="title binding">TimeZee</h2>
                          </div>
                          <div class="inner-block">
                              <h5>Chúng tôi sẵn sàng phục vụ bạn</h5>
                              <p>Mở rộng sản phẩm là sự lựa chọn giữa dây đeo bằng da hoặc vòng tay bằng kim loại, mang lại diện mạo hoàn toàn mới. Vỏ thép không gỉ tông đen với dây đeo cao su đen. Tinh thể sapphire không bị xước.</p>
                              <div class="block-price">
                                <p>Bắt đầu @ <span class="price">699.000 VND</span></p>
                              </div>
                              <a href="index.php?page=product&act=collectionall" class="slider-button btn-sl">Tất cả sản phẩm</a>
                          </div>
                      </div>
                  </div>

                  <div class="item">
                      <img src="./assets/image/banner (3).jpg" alt="">
                      <div class="item__content2">
                          <div class="border-title">
                             <h2 class="title binding">TimeZee </h2>
                          </div>
                          <div class="inner-block">
                              <h5>Hân hạnh phục vụ quý khách</h5>
                              <p>Chiếc đồng hồ đeo tay mang đến một cá tính lạnh lùng hơn nhiều. Đồng hồ Thụy Sĩ sang trọng. Vỏ thép không gỉ với dây đeo bằng da màu nâu. Mặt kính sapphire chống xước.</p>
                              <div class="block-price">
                                <p>Bắt đầu @ <span class="price">999.000 VND</span></p>
                              </div>
                              <a href="index.php?page=product&act=collectionall" class="btn-sl2 slider-button">Tất cả sản phẩm</a>
                          </div>
                      </div>
                  </div>

                  <div class="item">
                      <img src="./assets/image/banner (2).jpg" alt="">
                      <div class="item__content3">
                          <div class="border-title">
                             <h2 class="title binding">TimeZee</h2>
                             <p>2019</p>
                          </div>
                          <div class="inner-block">    
                              <p>Một trong những chiếc đồng hồ cao cấp nhất được phát hành trong năm 2019. Phong cách đích thực luôn tồn tại trong thời trang. Đồng hồ là sự bổ sung hoàn hảo cho bất kỳ trang phục nào.</p>   
                          </div>
                         <a href="index.php?page=product&act=collectionall" class="btn-sl slider-button">Tất cả sản phẩm</a>
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
                  <h5>Phong cách</h5>
                  <h3>Đồng hồ nam</h3>
                  <p>Quyền lực</p>
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
                  <h5 style="color: white;">Phong cách</h5>
                  <h3>Đồng hồ nữ</h3>
                  <p>Quyến rũ</p>
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
                  <h5 style="color:white">Phong cách</h5>
                  <h3>Đồng hồ cặp đôi</h3>
                  <p>Bền lâu</p>
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
                    <h2>Phong cách của riêng bạn</h2>
                </div>
                <div class="main__products-expired">
                  Bức phá
                </div>
                <div class="main__products-content">
                  <a href="index.php?page=product&act=collectionall" class="btn-sn">Mua ngay</a>
                </div>
            </div>
        </div>
      </div>
    
      <div class="main__products2">
        <div class="container">
          <div class="wrapper">
            <div class="item__block">
                <div class="item__block-title">
                  <h2>LA MÃ - SỐ</h2>
                </div>
                <div class="item__block-para">
                  <p>Phiên bản giới hạn gồm 200 chiếc trên toàn thế giới. Xem Big Bang, 361.PE.2010.RW.1104
                    Vỏ và dây đeo bằng thép không gỉ dày và nổi bật, tạo cảm giác bền trên cổ tay. Tuy nhiên, mặt số kỳ lạ hơn nhiều.
                  </p>
                </div>
                <div class="item__block-para2">
                  <p>Bộ máy thạch anh Nhật Bản nhập khẩu chính xác và thoải mái đảm bảo giữ thời gian chính xác. Thiết kế cổ điển của đồng hồ đa màn hình và chất liệu silicone thoải mái có thể mang đến cho người dùng những trải nghiệm ngoài trời tuyệt vời.</p>
                </div>
                <div class="item__block-btn">
                  <a href="index.php?page=product&act=collectionall" class="btn-sn">Mua ngay</a>
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

