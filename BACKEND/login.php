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
        <li><a href=""> QUẢN LÝ TÀI KHOẢN</a></li>
        <li><a href="indexadmin.php?quanly=employee"> QUẢN LÝ QUẢN TRỊ VIÊN</a></li>
        <li><a href="indexadmin.php?quanly=feedback"> QUẢN LÝ Ý KIẾN KHÁCH HÀNG</a></li>
     
  
</li>
      </ul>
    </div>
  </nav>
  <section>
  <section>
            <header>

              <h1 class="text-center text-primary fontHeading border border-secondary border-left-0 border-right-0">Login</h1>
              
            </header>
            <div class="col-md-8 offset-md-2 alert alert-danger text-center" role="alert" style="display: none"></div>
            <form class="col-md-12 offset-md-12" action="actionlogin.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
              <div class="form-group">
                <label for="inputUsername">Username <span class="text-danger">*</span></label>
                <input id="inputUsername" type="text" name = "username" class="form-control" placeholder="Enter username" autofocus>
              </div>
              <div class="form-group">
                <label for="inputPassword">Password <span class="text-danger">*</span></label>
                <input id="inputPassword"  name="password" type="password" class="form-control" placeholder="Enter password">
              </div>
              <div class="text-center">
                <button id="btnLogin" class="btn btn-outline-primary mr-1" type="submit" style="padding: .375rem .75rem;">Login</button>
                <a id="btnRegister" class="btn btn-outline-secondary" href="index.php?quanly=resgister" style="padding: .375rem .75rem;">Register</a>
              </div>
            </form>
          
          </section>
  <script src="../JS/jquery.min.js"></script>
  <script src="../JS/bootstrap.bundle.min.js"></script>
  <script src="../JS/bootstrap.min.js"></script>
  <script src="../JS/layout.js"></script>
</body>

</html>