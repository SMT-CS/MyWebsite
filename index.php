<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMT_TECH</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/owl.carousel.min.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/animate.min.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/magnific-popup.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/fontawesome-all.min.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/themify-icons.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/slick.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/meanmenu.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/default.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/style.css<?php echo "?t=".time();?>">
    <link rel="stylesheet" href="css/responsive.css<?php echo "?t=".time();?>">
</head>

<body>
    <!-- template1-start -->
    <?php
        if(empty($_GET["template"])){$_GET["template"]=1;}
        include ("template/template".$_GET["template"].".php");
    ?>
    <!-- template1-end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>