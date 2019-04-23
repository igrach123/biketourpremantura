<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="de">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Rent a Bike Premantura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon setup -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <base href="#">
    <link href="#" rel="canonical" />
    <link href="../en/index.php" rel="alternate" hreflang="en">
    <meta name="keywords"
        content="Rent a Bike Premantura, Cycling centar Premantura Hrvatska, Cycling centro Premantura Croazia, Cycling center Premantura Croatia, rental,rent a bike">
    <meta name="description"
        content="Rent a Bike Premantura,Cycling centar Premantura Hrvatska, Cycling centro Premantura Croazia, Cycling center Premantura Croatia, school, rental,rent a bike">
    <meta http-equiv="content-language" content="de,hr">
    <!--main bootstrap stylesheet-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!--video player  stylesheet-->
    <link rel="stylesheet" href="../css/assets/animate.min.css">
    <link rel="stylesheet" href="../css/assets/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../css/assets/blueimp-gallery-indicator.css">
    <link rel="stylesheet" href="../css/assets/blueimp-gallery-video.css">
    <!--owl carousel-->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.min.css">
    <link rel="stylesheet" href="../css/owl.transitions.min.css">
    <!--main stylesheet-->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target="#myNavbar" data-offset="65" id="home-en">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!--    blueip galelry -->
    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <?php include "../php/variables.php"; ?>
    <?php include "header.php"; ?>
    <div class="clearfix"></div>




    <!--  CONTENT WRAPPER-->
    <div class="container-fluid" id="content-wrapper">
        <!-- services -->
        <!-- services -->
        <?php include "php/services.php"; ?>
        <!-- services modals -->
        <?php include "php/services-pdnevni.php"; ?>
        <?php include "php/services-cdnevni.php"; ?>
        <?php include "php/services-urbana.php"; ?>
        <?php include "php/services-enduro.php"; ?>
        <?php include "php/custom-tour.php"; ?>

        <!-- end of services     -->

        <!-- location -->
        <?php include "php/location.php" ?>
        <?php include "php/bike-cjenik.php"?>
        <?php include "php/cjenik-bikes.php"?>
        <?php include "php/location-permantura.php" ?>
        <?php include "php/location-medulin.php" ?>
        <?php include "php/location-bike.php" ?>
        <?php include "php/partner-slide.php" ?>

    </div> <!-- end of content wrapper -->


    <?php include "footer.php"; ?>





    <!--JavaScript, jquerry and plugins-->
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="form.js"></script>
    <script src="../js/main-js-backup-min.js"></script>

</body>

</html>