<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?= asset_url("vendor/assets/img/apple-icon.png") ?>">
    <link rel="icon" type="image/png" href="<?= asset_url("vendor/assets/img/favicon.ico") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>CMS</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>


    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- CSS Files -->
    <link href="<?= asset_url("vendor/assets/css/bootstrap.min.css") ?>" rel="stylesheet"/>
    <link href="<?= asset_url("vendor/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ") ?>" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= asset_url("vendor/assets/css/demo.css") ?>" rel="stylesheet"/>

    <link href="<?= asset_url("styles/home.css") ?>" rel="stylesheet"/>


</head>
<body>
<div class="wrapper">

    <?php include_once("header.php") ?>
    <div class="frontend">
        <!--Content -->
        <?php
        echo @$_CONTENT;
        ?>
        <!--End Content -->

    </div>
<?php include_once("footer.php") ?>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?= asset_url("vendor/assets/js/core/jquery.3.2.1.min.js") ?>" type="text/javascript"></script>
<script src="<?= asset_url("vendor/assets/js/core/popper.min.js") ?>" type="text/javascript"></script>
<script src="<?= asset_url("vendor/assets/js/core/bootstrap.min.js") ?>" type="text/javascript"></script>

</html>

