<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Student1800787 - Thanh Nguyen Phuoc">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="The website is designed for the Kids for learning in more creative way">
  <title>Web commerce</title>
  <script src="../JS/fontawesome.min.js"></script>
  <link rel="stylesheet" href="../CSS/fontawesome.min.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/layout.css">
  <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>

  <!-- sidebar of page-->
  <nav id="sidebar" class="border border-danger border-top-0 border-left-0 border-bottom-0">
    <div class="sticky-top">
      <div id="logo" href="./indexadmin.php">
        <a href="./indexadmin.php"><img src="../IMG/mo.png" alt="" class="img-fluid"></a>
      </div> 
      <div class="sidebar-header text-center text-danger">Tiệm trà mơ</div>
      <ul class="list-unstyled sidebar-nav">
        <li><a href="indexadmin.php?quanly=product"> QUẢN LÝ SẢN PHẨM</a></li>
        <li><a href="indexadmin.php?quanly=customer"> QUẢN LÝ KHÁCH HÀNG</a></li>
        <li><a href="#"> QUẢN LÝ TÀI KHOẢN</a></li>
        <li><a href="indexadmin.php?quanly=employee"> QUẢN LÝ QUẢN TRỊ VIÊN</a></li>
        <li><a href="indexadmin.php?quanly=feedback"> QUẢN LÝ Ý KIẾN KHÁCH HÀNG</a></li>
     
  
</li>
      </ul>
    </div>
  </nav>
  <section>
            <?php
            require("content.php");
            ?>
          </section>
  <script src="../JS/jquery.min.js"></script>
  <script src="../JS/bootstrap.bundle.min.js"></script>
  <script src="../JS/bootstrap.min.js"></script>
  <script src="../JS/layout.js"></script>
</body>

</html>