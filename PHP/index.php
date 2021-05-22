<?php
session_start();
include_once("config.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Student1800787 - Thanh Nguyen Phuoc">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="The website is designed for the Website commerce">
  <title>Web commerce</title>
  <script src="../JS/fontawesome.min.js"></script>
  <link rel="icon" href="../image/brand/icon.png">
  <link rel="stylesheet" href="../CSS/fontawesome.min.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/layout.css">
  <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>
  <!-- sidebar of page-->
  <nav id="sidebar" class="border border-danger border-top-0 border-left-0 border-bottom-0">
    <div class="sticky-top">
      <div id="logo" href="./home.php">
        <a href="./home.php"><img src="../IMG/mo.png" alt="" class="img-fluid"></a>
      </div>
      <div class="sidebar-header text-center text-danger">Tiệm trà mơ</div>
      <ul class="list-unstyled sidebar-nav">
        <li><a href="blog1.php"> Story of Tea</a></li>
        <li><a href="product.php"> Product</a></li>
        <li> <a href="blog.php">About</a></li>
      </ul>
    </div>
  </nav>

  <!-- Layout wrap all elements -->
  <div class="wrapper">
    <!-- Background of page -->
    <div id="background-image">

      <!-- Header of page -->
      <header class="w-100">
        <!-- Layout Btn Study and Frm Login, hide if sm-device -->
        <div class="d-flex bg-white">
          <!-- Btn Study and Frm Login, hide if md-device -->
          <button class="btnSidebarCollapse d-none d-lg-block btn" type="button">
            <i class="fas fa-align-left"></i> <span class="d-none d-xl-inline"></span>
          </button>
          <!-- Frm Login -->
          <form id="frmLogin" class="ml-auto" style="display: none">
            <div class="form-row">
              
              <div class="col">
              <a id="btnLogin" class="btn btn-block btn-outline-primary" href="loginn.php">Login</a>
              </div>
              <div class="col">
                <a id="btnRegister" class="btn btn-block btn-outline-primary" href="index.php?quanly=resgister">Register</a>
              </div>
            </div>
          </form>
        </div>
        <!-- Navigation Bar of page-->
        <nav class="navbar navbar-expand-md navbar-light bg-light border border-danger shadow">
          <a class="navbar-brand brand" href="./home.php"><img src="../IMG/mo11.png" alt="" height="0"></a>
          <button class="btn btn-outline-primary d-block d-md-none" type="button" data-toggle="collapse" data-target="#navigation-bar">
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navigation-bar">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="./home.php"><i class="fas fa-home"></i> Home</a>
              </li>
              <!-- Study of Nav-bar will hide if lg-device * Btn Study hide then it show and vice versa *-->
              <li class="nav-item dropdown d-block d-lg-none">
                <a class="nav-link dropdown-toggle" id="" data-toggle="dropdown" aria-expanded="false">Story of Tea</a>
                <div class="dropdown-menu" aria-labelledby="">
                  <a class="dropdown-item" href="#">About</a>
                  <a class="dropdown-item" href="contact.php">Contact Us</a>
                  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Story of Tea</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog1.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Log out</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Banner of page -->
        <div id="banner" class="border border-danger text-center d-none d-md-block">
          <img src="../IMG/banner.png" alt="">
        </div>
      </header>

      <!-- Layout of Navigation Bar -->
      <div class="container-fluid bg-white no-padding sticky-top">
        <div class="space bg-white "></div>

        <div class="space bg-white border border-top-0 border-left-0 border-right-0"></div>
      </div>

      <!-- Main of page -->
      <main class="border border-top-0">
        <div class="container-fluid bg-trans shadow">

          <!-- Section: Events -->
          <section>
            <?php
            require("content.php");
            ?>
          </section>


        </div>
      </main>
    </div>

    <!-- Footer of page -->
    <footer id="footer" class="container-fluid bg-light border border-danger shadow">

      <!-- Layout-brand -->
      <div class="row">
        <div class="col-xl-6">
          <div class="d-flex align-items-center justify-content-center">
            <img src="../IMG/mo.png" alt="" width = "50px" height="30px" class="mr-2">
            <div class="h5 no-margin">
              <span class="h6"><small>Website commerce OwlTea</small></span>
            </div>
          </div>
        </div>
        <div class="col-xl-6 text-center">
          <a class="text-decoration-none" href="https://fonts.google.com/" target="_blank">
            <img src="../IMG/logo-googlefonts.png" alt="" height="45" class="mr-2 my-2">
          </a>
          <a class="text-decoration-none" href="https://getbootstrap.com/" target="_blank">
            <img src="../IMG/logo-bootstrap.png" alt="" height="30" class="mr-2 my-2">
          </a>
          <a class="text-decoration-none" href="https://jquery.com/" target="_blank">
            <img src="../IMG/logo-jquery.png" alt="" height="35" class="mr-2 my-2">
          </a>
          <a class="text-decoration-none" href="https://fontawesome.com/" target="_blank">
            <img src="../IMG/logo-fontawesome.png" alt="" height="30" class="mr-2 my-2">
          </a>
        </div>
      </div>
      <hr>
      <!-- Layout-content-footer -->
      <div class="row">
        <!-- Footer -->
        <section id="footer-events" class="col-md-6 col-xl-4">
          <h5 class="text-danger">Information</h5>
          <ol class="no-padding list-unstyled no-margin">
            <li><a class="small text-dark" href="#">Tuyển dụng</a><br></li>
            <li><a class="small text-dark" href="#">Thông tin</a><br></li>
            <li><a class="small text-dark" href="#">Khuyến mãi</a><br></li>
          </ol>
        </section>
        <!-- Footer-contact -->
        <section id="footer-contact" class="col-md-6 col-xl-4">
          <h5 class="text-danger">Contact</h5>
          <address class="small no-margin">
            <b>Address:</b> An Hoa, Ninh Kieu, Can Tho<br>
            <b>Fax:</b> +84 123 456<br>
            <b>Email:</b> ctuet@ctuet.edu.vn<br>
            <b>Phone:</b> +84 292 123 456<br>
          </address>
        </section>
        <!-- Footer-location -->
        <section id="footer-location" class="col-md-12 col-xl-4">
          <h5 class="text-danger">Location</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6384937101893!2d105.76562691474268!3d10.046660192819205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0880f08006ffb%3A0x9a745510330faf4e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBL4bu5IHRodeG6rXQgLSBDw7RuZyBuZ2jhu4cgQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1601386917489!5m2!1svi!2s" width="100%"  frameborder="0" allowfullscreen></iframe>
        </section>
      </div>
    </footer>
  </div>

  <script src="../JS/jquery.min.js"></script>
  <script src="../JS/bootstrap.bundle.min.js"></script>
  <script src="../JS/bootstrap.min.js"></script>
  <script src="../JS/layout.js"></script>
</body>

</html>