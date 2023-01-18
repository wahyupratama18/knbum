<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kemitraan Negara Berkembang - Universitas Negeri Malang</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img\FA_Rebranding_Logo_KNB_2020_ Icon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/background.css" rel="stylesheet">
  <link href="css/contact.css" rel="stylesheet">
  <link href="css/intro.css" rel="stylesheet">
  <link href="css/knb.css" rel="stylesheet">
  <link href="css/masterinum.css" rel="stylesheet">
  <link href="css/requirement.css" rel="stylesheet">
  <link href="css/tombol.css" rel="stylesheet">

  <!-- Galeri Stylesheet File -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
  <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.0"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();
    });
  </script>

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background: #FFFFFF; height: 72px; padding: 20px 0;">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><img src="img/kemdikbud.png" alt="ristek" height="40px"> <img src="img\FA_Rebranding_Logo_KNB_2020_ Landscape.png" alt="KNB" height="40px"> <img src="img/um.png" alt="UM" height="40px"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro" style="color: #2432ac;">Home</a></li>
          <li class="menu-has-children"><a href="" style="color: #2432ac;">About</a>
            <ul>
              <li><a href="#about" style="color: #2432ac;">KNB Scholarship</a></li>
              <li><a href="#features" style="color: #2432ac;">KNB at UM</a></li>    
            </ul>
          </li>
          <li class="menu-has-children"><a href="#masterinum" style="color: #2432ac;">Programs</a>
            <ul>
              <li><a href="#bachelorinum" style="color: #2432ac;">Bachelor Program</a></li>
              <li><a href="#masterinum2" style="color: #2432ac;">Master Program</a></li>
              <li><a href="#doctoral" style="color: #2432ac;">Doctoral Program</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#eligible" style="color: #2432ac;">Apply</a>
            <ul>
              <li><a href="apply.php" style="color: #2432ac;">How to Apply</a></li>
              <li><a href="#required" style="color: #2432ac;">Programs</a></li>

            </ul>
          </li>
          <li><a href="gallery.php" style="color: #2432ac;">Gallery</a></li>
          <li><a href="#contact" style="color: #2432ac;">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <?php include 'intro.php' ?>

  <main id="main">

    <!--==========================
      Background Section
    ============================-->
    <?php include 'background.php' ?>

    <!--==========================
      KNB Section
    ============================-->
    <?php include 'knb.php' ?>

    <!--==========================
      Master in UM Section
    ============================-->
    <?php include 'masterinum.php' ?>

    <!--==========================
      Requirement Section
    ============================-->
    <?php include 'requirement.php' ?>

    <!--==========================
      Apply Section
    ============================-->
    <?php include 'applygeneral.php' ?>
    <!--==========================
      Procedures Section
    ============================-->
    <?php include 'galeri.php' ?>

    <!--==========================
      Contact Section
    ============================-->
    <?php include 'contact.php' ?>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Kantor Hubungan Internasional Universitas Negeri Malang</strong>.<br>All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#features" class="scrollto">KNB</a>
            <a href="#masterinum" class="scrollto">Programs</a>
            <a href="#eligible" class="scrollto">Apply</a>
            <a href="gallery.php">Galleries</a>
            <a href="#contact">Contact</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/jquery.js"></script>
</body>

</html>
