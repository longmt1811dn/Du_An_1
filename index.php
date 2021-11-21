<?php
session_start();
require_once("./dao/admin_object.php");
require_once("./dao/admin_type.php");
require_once("./dao/admin_type_brand.php");
require_once("./dao/admin_brand.php");
require_once("./dao/admin_product.php");
require_once("./dao/admin_news.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TimeZee</title>

  <!-- Logo Website A-->
  <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0075/1832/2770/t/7/assets/favicon.png?v=3722167649135258256" type="image/png" />

  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300&family=Playfair+Display&family=Source+Sans+Pro:ital,wght@0,400;1,200&display=swap" rel="stylesheet" />

  <!-- Font Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />

  <!-- Style Css -->
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>

  <!-- header -->
  <?php require_once './site/header.php'; ?>

  <!-- main -->
  <?php require_once './site/main.php'; ?>

  <!-- footer -->
  <?php require_once './site/footer.php'; ?>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slider.js"></script>

</html>