<main class="main">
  <nav class="collection__nav">
    <div class="collection__nav-text center-center">
      <h1><?= $item['title'] ?></h1>
    </div>
  </nav>

  <div class="news_container">
    <div class="list-news">
      <div class="new-image">
        <img src="<?= $item['image_new'] ?>" alt="">
      </div>

      <div class="new-title">
        <h1><?= $item['summary'] ?></h1>
      </div>
      <div class="new-date-user">
        <div class="date"><span>Ngày đăng: <?= date("d/m/Y", strtotime($item['date'])) ?></span></div>
        <div class="user"><span>Admin: <?= users_name($item['id_user']) ?></span></div>
      
      </div>
      <div class="new-content">
        <?= $item['content'] ?>
      </div>

      <div class="new__lineBottom"></div>
    </div>
  </div>
</main>