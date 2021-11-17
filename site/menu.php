<?php
$menu_obj = obj_select_all();
?>
<nav class="header__nav">
  <ul class="main__menu">
    <li><a href="index.php"> Home </a></li>

    <?php foreach ($menu_obj as $menu_obj) { ?>
      <li>
        <a> <?= $menu_obj['name_object']; ?> <i class="fas fa-caret-down"></i></a>
        <ul class="submenu submenu__main">
          <li class="submenu__bar">

            <?php
            $title_type = type_select_idObj($menu_obj['id_object']);
            foreach ($title_type as $title_type) { ?>
              <div class="submenu__bar-box">
                <div class="box-title">
                  <p><?= $title_type['name_type'] ?></p>
                </div>

                <?php
                $name_type_brand = type_brand_select_idType($title_type['id_type']);
                ?>

                <ul class="box-menu">

                  <?php
                  foreach ($name_type_brand as $name_type_brand) { ?>
                    <li><a href="index.php?page=product&act=collection"><?= brand_select_by_id_type_brand($name_type_brand['id_brand']);  ?></a></li>
                  <?php } ?>

                </ul>
              </div>

            <?php } ?>
          </li>

          <li class="submenu__img">
            <img src="./assets/image/img_brand (2).jpg" alt="" />
          </li>
        </ul>
      </li>

    <?php } ?>
    <li>
      <a href="#"> Pages <i class="fas fa-caret-down"></i></a>


      <ul class="submenu submenu__page">
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </li>
  </ul>
</nav>