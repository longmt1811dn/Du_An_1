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
                    
                    <?php foreach ($list as $item) { ?>
                        <?php if($i % 2 == 0) { ?>
                        
                        <!-- Item left -->
                        <div class="item__top--left">
                            <div class="article">
                                <div class="article-image">
                                  <a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>"><img src="<?= $item['image_new'] ?>" alt=""></a>
                                </div>
                                <div class="blog-description">
                                    <div class="blog-sub-title">
                                       <p class="blog-date">
                                         <i class="far fa-calendar"></i>
                                         <span><?= date("d/m/Y", strtotime($item['date'])) ?></span>
                                       </p>
                                       <p class="athur">
                                         <i class="far fa-user"></i>
                                         <span><?= users_name($item['id_user']) ?></span>
                                       </p>

                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>"><?= $item['title'] ?></a></h3>
                                        <p><?= $item['summary'] ?></p>
                                    </div>
                                    <div class="blog-btn btn-cart">
                                      <a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>">Đọc thêm
                                        <i class="fas fa-angle-right"></i>
                                      </a>
                                    </div>

                                </div>
                            </div>                            
                        </div>
                        
                        <?php $i++; ?>
                        <?php } else { ?>
                        
                        <!-- Item right -->
                        <div class="item__top--right">
                            <div class="article">
                                <div class="article-image">
                                  <a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>"><img src="<?= $item['image_new'] ?>" alt=""></a>
                                </div>
                                <div class="blog-description">
                                    <div class="blog-sub-title">
                                       <p class="blog-date">
                                         <i class="far fa-calendar"></i>
                                         <span><?= date("d/m/Y", strtotime($item['date'])) ?></span>
                                       </p>
                                       <p class="athur">
                                         <i class="far fa-user"></i>
                                         <span><?= users_name($item['id_user']) ?></span>
                                       </p>

                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>"><?= $item['title'] ?></a></h3>
                                        <p><?= $item['summary'] ?></p>
                                    </div>
                                    <div class="blog-btn btn-cart">
                                      <a href="index.php?page=blogs&act=news&id=<?= $item['id_news'] ?>">Đọc thêm
                                        <i class="fas fa-angle-right"></i>
                                      </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <?php $i++; ?>
                        <?php }} ?>

                    </div>
                </div>
            </div>
        </main>