<?php require_once "../dao/admin_product.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN</title>

    <!-- Logo Website A-->
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0075/1832/2770/t/7/assets/favicon.png?v=3722167649135258256" type="image/png" />

    <!-- Google font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body class="admin">
    <!-- Navigation -->
    <nav class="admin-nav">
        <div class="admin-nav__logo">
            <a href="./index.php">
                <img src="../assets/image/logo.png" alt="No Image" />
            </a>
        </div>

        <div class="admin-nav__menu">
            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon">
                    <i class="fab fa-app-store"></i> </span>Loại
            </button>
            <div class="admin-nav__menu-item">
                <a href="./list.html" class="admin-nav__menu-link">Danh sách</a>
                <a href="./add.html" class="admin-nav__menu-link">Thêm mới</a>
                <a href="#" class="admin-nav__menu-link"></a>
            </div>

            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon"> <i class="fab fa-btc"></i> </span>Section 1
            </button>
            <div class="admin-nav__menu-item">
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
            </div>

            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon">
                    <i class="fas fa-chart-bar"></i> </span>Section 1
            </button>
            <div class="admin-nav__menu-item">
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
            </div>

            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon">
                    <i class="fab fa-cloudversify"></i> </span>Section 1
            </button>
            <div class="admin-nav__menu-item">
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
            </div>

            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon">
                    <i class="fab fa-app-store"></i> </span>Section 1
            </button>
            <div class="admin-nav__menu-item">
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
            </div>

            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon"> <i class="fab fa-btc"></i> </span>Section 1
            </button>
            <div class="admin-nav__menu-item">
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
            </div>

            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon">
                    <i class="fas fa-chart-bar"></i> </span>Section 1
            </button>
            <div class="admin-nav__menu-item">
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
            </div>

            <button class="admin-nav__menu-list">
                <span class="admin-nav__menu-icon">
                    <i class="fab fa-cloudversify"></i> </span>Section 1
            </button>
            <div class="admin-nav__menu-item">
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
                <a href="#" class="admin-nav__menu-link">Lorem ipsum...</a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="admin-header">
        <div class="admin-header_profile">
            <input type="checkbox" class="check-qtv" id="check-qtv" hidden />
            <label for="check-qtv" class="profile-user_avatar">
                <div class="img-user_avatar">
                    <img src="../assets/image/avt-username_admin.png" alt="" />
                </div>
            </label>
            <div class="profile-user_name">
                <h4 class="name_admin">Lê Xuân Phát</h4>
                <p class="role_admin">Quản trị viên</p>
            </div>
            <div class="profile-info">
                <div class="profile-info_detail">
                    <a href="">Hồ sơ</a>
                    <a href="">Thoát</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="admin-main">
        <div class="admin-main_page">
            <div class="page-title_box">
                <h4 class="page-title">Danh sách</h4>
            </div>
            <div class="page-top_product">
                <div class="table-top-product">
                    <div class="top-title">
                        <div class="id-top-title"><span>#</span></div>
                        <div class="name-top-title"><span>Name product</span></div>
                        <div class="img-top-title"><span>Image</span></div>
                        <div class="price-top-title"><span>Price</span></div>
                        <div class="view-top-title"><span>View</span></div>
                        <div class="status-top-title"><span>Status</span></div>
                        <div class="action-top-title">Action</div>
                    </div>
                    <?php $listprod = product_listall(); ?>
                    <?php foreach ($listprod as $list) { ?>
                        <div class="item-top-title">
                            <div class="id-item">
                                <p><?= $list['id_product'] ?></p>
                            </div>
                            <div class="name-item">
                                <p><?= $list['name_product'] ?></p>
                            </div>
                            <div class="img-item">
                                <img src="../../<?= $list['image'] ?>" alt="" />
                            </div>
                            <div class="price-item">
                                <p><?= number_format($list['price']) ?></p>
                            </div>
                            <div class="view-item">
                                <p><?= $list['view'] ?></p>
                            </div>
                            <div class="Status-item">
                                <p><?= ($list['hide'] == 1) ? "Hiện" : "Ẩn"  ?></p>
                            </div>
                            <div class="action-item">
                                <a href="">Xoá</a>
                                <a href="./update.html">Sửa</a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="item-top-title">
                        <div class="id-item">
                            <p>2</p>
                        </div>
                        <div class="name-item">
                            <p>Đồng hồ Ozaqua Tokudo 900</p>
                        </div>
                        <div class="img-item">
                            <img src="../assets/image/dongho_aladin (2).jpeg" alt="" />
                        </div>
                        <div class="price-item">
                            <p>12,000,000</p>
                        </div>
                        <div class="view-item">
                            <p>322</p>
                        </div>
                        <div class="Status-item">
                            <p>Hiện</p>
                        </div>
                        <div class="action-item">
                            <a href="">Xoá</a>
                            <a href="./update.html">Sửa</a>
                        </div>
                    </div>
                    <div class="item-top-title">
                        <div class="id-item">
                            <p>3</p>
                        </div>
                        <div class="name-item">
                            <p>Đồng hồ Rolex Hào Quang 1200</p>
                        </div>
                        <div class="img-item">
                            <img src="../assets/image/dongho_aladin (1).jpeg" alt="" />
                        </div>
                        <div class="price-item">
                            <p>100,172,000</p>
                        </div>
                        <div class="view-item">
                            <p>123</p>
                        </div>
                        <div class="Status-item">
                            <p>Hiện</p>
                        </div>
                        <div class="action-item">
                            <a href="">Xoá</a>
                            <a href="./update.html">Sửa</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page_phantrang">
                <a class="page_num activex" href="">1</a>
                <a class="page_num" href="">2</a>
                <a class="page_num" href="">3</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="admin-footer">FOOTER</footer>

    <script src="../assets/js/admin_nav.js"></script>
</body>

</html>