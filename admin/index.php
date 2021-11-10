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
        <?php require_once "nav.php" ?>
    </nav>

    <!-- Header -->
    <header class="admin-header">
        <?php require_once "header.php" ?>
    </header>

    <!-- Main -->
    <main class="admin-main">
        <div class="admin-main_page">
            <div class="page-title_box">
                <h4 class="page-title">Trang chủ</h4>
            </div>
            <div class="page-list-total_box">
                <div class="page-item-total">
                    <div class="img_page-item">
                        <img src="../assets/image/avt-username_admin.png" alt="" />
                    </div>
                    <div class="name_page-item">
                        <p>Total product</p>
                        <span class="number-total">288</span>
                    </div>
                </div>
                <div class="page-item-total">
                    <div class="img_page-item">
                        <img src="../assets/image/avt-username_admin.png" alt="" />
                    </div>
                    <div class="name_page-item">
                        <p>Total review</p>
                        <span class="number-total">78</span>
                    </div>
                </div>
                <div class="page-item-total">
                    <div class="img_page-item">
                        <img src="../assets/image/avt-username_admin.png" alt="" />
                    </div>
                    <div class="name_page-item">
                        <p>Total posts</p>
                        <span class="number-total">156</span>
                    </div>
                </div>
                <div class="page-item-total">
                    <div class="img_page-item">
                        <img src="../assets/image/avt-username_admin.png" alt="" />
                    </div>
                    <div class="name_page-item">
                        <p>Total users</p>
                        <span class="number-total">12</span>
                    </div>
                </div>
            </div>
            <div class="page-top_product">
                <div class="rows-name-top">
                    <h3>top 5 sản phẩm bán chạy nhất hiện nay</h3>
                </div>
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
                    <div class="item-top-title">
                        <div class="id-item">
                            <p>1</p>
                        </div>
                        <div class="name-item">
                            <p>Tên sản phẩm</p>
                        </div>
                        <div class="img-item">
                            <img src="../assets/image/dongho_aladin (8).jpeg" alt="" />
                        </div>
                        <div class="price-item">
                            <p>72,000</p>
                        </div>
                        <div class="view-item">
                            <p>32</p>
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
        </div>
    </main>

    <!-- Footer -->
    <?php require_once "./footer.php" ?>

    <script src="../assets/js/admin_nav.js"></script>
</body>

</html>