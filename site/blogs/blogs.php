<main>
            <div class="main__nav">
                <div class="main__nav-name">
                    <h2>Tin tức</h2>
                </div>           
            </div>
            <div class="main__content">
                <div class="bg-container ">
                    
                    <!-- Thanh tin bên tay trái -->
                    <div class="main__content--slidebar">
                        <h4>Tin mới nhất</h4>
                        <ul>
                            
                            <?php foreach ($listFive as $item) {?>
                            
                          <li>
                            <div class="image">
                                <a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>"><img src="<?= $item['image_new'] ?>" alt=""></a>
                            </div>
                            <div class="detail">
                              <h5><a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>"><?= $item['title'] ?></a></h5>
                              <p><?= $item['summary'] ?></p>
                            </div>
                          </li>
                          
                          <?php } ?>
                          
                        </ul>
                        
                    </div>
                    
                    <!-- Thanh bên tay phải -->
                    <div class="main__content--right">
                        
                        <div class="item__top--left">
                            <div class="article">
                                <div class="article-image">
                                  <a href=""><img src="https://cdn.shopify.com/s/files/1/0075/1832/2770/articles/blog7.jpg?v=1562317901" alt=""></a>
                                </div>
                                <div class="blog-description">
                                    <div class="blog-sub-title">
                                       <p class="blog-date">
                                         <i class="far fa-calendar"></i>
                                         <span>Jul 05 , 2019</span>
                                       </p>
                                       <p class="blog-comment-count">
                                          <i class="far fa-comment"></i>
                                          <a href="">0 Comment</a>
                                       </p>
                                       <p class="athur">
                                         <i class="far fa-user"></i>
                                         <span>Ram M</span>
                                       </p>

                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="">The Story Behind a Super Watch</a></h3>
                                        <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis di...</p>
                                        <div class="blog-tag">
                                          <i class="fas fa-tag"></i>
                                          <p> Aristo , Bezel</p>

                                        </div>
                                    </div>
                                    <div class="blog-btn btn-cart">
                                      <a href="">Read More
                                        <i class="fas fa-angle-right"></i>
                                      </a>
                                    </div>

                                </div>
                            </div>                            
                        </div>

                        <div class="item__top--right">
                            <div class="article">
                                <div class="article-image">
                                  <a href=""><img src="https://cdn.shopify.com/s/files/1/0075/1832/2770/articles/blog7.jpg?v=1562317901" alt=""></a>
                                </div>
                                <div class="blog-description">
                                    <div class="blog-sub-title">
                                       <p class="blog-date">
                                         <i class="far fa-calendar"></i>
                                         <span>Jul 05 , 2019</span>
                                       </p>
                                       <p class="blog-comment-count">
                                          <i class="far fa-comment"></i>
                                          <a href="">0 Comment</a>
                                       </p>
                                       <p class="athur">
                                         <i class="far fa-user"></i>
                                         <span>Ram M</span>
                                       </p>

                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="">The Story Behind a Super Watch</a></h3>
                                        <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis di...</p>
                                        <div class="blog-tag">
                                          <i class="fas fa-tag"></i>
                                          <p> Aristo , Bezel</p>

                                        </div>
                                    </div>
                                    <div class="blog-btn btn-cart">
                                      <a href="">Read More
                                        <i class="fas fa-angle-right"></i>
                                      </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </main>