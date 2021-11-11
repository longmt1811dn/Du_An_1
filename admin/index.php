<?php
session_start();
require_once '../../dao/pdo.php';
require_once '../../dao/admin_users.php';
?>
<?php
if (isset($_SESSION['thongbao']) == true) {
    echo '<script>alert("' . $_SESSION['thongbao'] . '"); window.location="../login";</script>';
    exit();
}

if (isset($_SESSION['login_id_admin']) == false) {
    header("location: ../login/");
    exit();
}
?>
<?php
if (isset($_SESSION['login_id_admin']) == true) {
    $idUser = $_SESSION['login_id_admin'];
}

$admin = users_one($idUser);
?>

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
    <link rel="stylesheet" href="../../assets/css/style.css" />
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
        <?php
        include "$VIEW_NAME";
        ?>
    </main>

    <!-- Footer -->
    <?php require_once "footer.php" ?>

    <!-- JavaScript -->
    <script src="../../assets/js/admin_nav.js"></script>
</body>

</html>