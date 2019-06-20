<?php 
    ob_stat();
 ?>
<?php 
     session_start();
 ?>
 <!doctype html>
<html class="no-js" lang="">
  <head>
    <link rel="shortcut icon" href="img/computer.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>TDStore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
    <!--For Plugins external css-->
    <!-- <link rel="stylesheet" href="assets/css/plugins.css" /> -->
    <link rel="stylesheet" href="assets/css/roboto-webfont.css" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  </head>
  <body>
      <div class='preloader'><div class='loaded'>&nbsp;</div></div>
    <!-- Sections -->
    <section id="social" class="social">
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="social-wrapper">
            <div class="col-md-6">
              <div class="social-icon">
                <a href="https://www.facebook.com/TDStore-376692499457246/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
            </div>
             <div class="col-md-6">
                            <div class="social-contact">
                                <?php

                                        if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
                                            echo '<a href="signup.php"><i class="fa fa-user-plus"></i>Đăng kí</a>';
                                            echo '<a href="signin.php"><i class="fa fa-sign-in"></i>Đăng nhập</a>';
                                        }else{
                                             echo '<i style="color: #fff; font-size: 15px;">Hi,'.$_SESSION["name"].'</i>';
                                             echo ' ';
                                             echo '<a href="logout.php"><i class="fa fa-sign-in"></i>Đăng xuất</a>';
                                        }
                                       
                                    ?>     
                            </div>
                        </div>
          </div>
        </div>
        </div> <!-- /container -->
      </section>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo3.jpg" alt="Logo" /></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Trang Chủ</a></li>
              <li><a href="new.php">Tin Tức</a></li>
              <li class="active"><a href="#">Về Chúng Tôi</a></li>
              <li><a href="huongdan.php">Hướng Dẫn Mua Hàng</a></li>
              <li><a href="contact.php">Liên Hệ</a></li>
            </ul>
            </div>
            </div>
          </nav> 