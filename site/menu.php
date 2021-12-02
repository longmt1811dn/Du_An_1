<?php
$menu_obj = obj_select_all();
$conn = pdo_get_connection();
?>

<nav class="header__nav">
  <ul class="main__menu">
    <li><a href="index.php"> Trang chủ </a></li>

    <?php foreach ($menu_obj as $menu_obj) { ?>
    
      <li>
        <a> <?= $menu_obj['name_object']; ?> <i class="fas fa-caret-down"></i></a>
        
        <?php
        $sql = "SELECT * FROM type where id_object =". $menu_obj['id_object'] .";";
        $kq = $conn->query($sql);
        
        if ($kq->rowCount() > 0) {
        ?>
        
        <!-- SUBMENU ở đây -->
        <ul class="submenu submenu__main">
          <li class="submenu__bar">

            <?php
            $title_type = type_select_idObj($menu_obj['id_object']);
            foreach ($title_type as $title_type) { ?>

              <div class="submenu__bar-box">
                <div class="box-title">
                  <a href="index.php?page=product&act=ct&id=<?= $title_type['id_type'] ?>">
                    <p><?= $title_type['name_type'] ?></p>
                  </a>
                </div>
              </div>

            <?php } ?>
          </li>

          <li class="submenu__img">
            <img src="./assets/image/img_brand (2).jpg" alt="" />
          </li>
        </ul>
        
        <?php } ?>
        
      </li>
    <?php } ?>
    <li>
      <a> Các trang khác <i class="fas fa-caret-down"></i></a>


      <ul class="submenu submenu__page">
        <li><a href="index.php?page=home&act=about">Về chúng tôi</a></li>
        <li><a href="index.php?page=home&act=contact">Liên hệ</a></li>
        <li><a href="index.php?page=blogs&act=blogs">Tin tức</a></li>
      </ul>
      
    <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
    <form action="" method="get" class="search__control">
        <input type="hidden" name="page" value="product">
        <input type="hidden" name="act" value="find">
        <input type="text" style="width: 80%" class="input__control" placeholder="Từ khóa cần tìm" name="tuKhoaTimKiem" required>
        <br>
        <br>
        <button type="submit" class="btn">TÌm kiếm</button>
    </form>
    
    </div>
    </div>
      
    </li>
  </ul>
</nav>

<script src="./assets/js/open__nav.js"></script>