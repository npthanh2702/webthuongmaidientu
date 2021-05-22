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
  <body>

<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "doan";

$con = mysqli_connect($hostname,$user,$pass,$db);
mysqli_query($con,$db);
mysqli_set_charset($con,"utf8");

if (isset($_POST["btnFromRegister"])) {
	$username = mysqli_escape_string($con, $_POST["username"]);
  $password = mysqli_escape_string($con, $_POST["password"]);
  $name = mysqli_escape_string($con, $_POST["name"]);
  $gender = mysqli_escape_string($con, $_POST["gender"]);
	$date = mysqli_escape_string($con, $_POST["date"]);
  $email = mysqli_escape_string($con, $_POST["email"]);
  $phone = mysqli_escape_string($con, $_POST["phone"]);
  $address = mysqli_escape_string($con, $_POST["address"]);
  
  $sql = "SELECT * FROM member WHERE username = '$username'";


  if ($username == "" || $password== "" || $name == "" || $gender == ""|| $date==""||$email == "" || $phone == ""|| $address=="") {
		echo "Bạn vui lòng nhập đầy đủ thông tin";
  }
	else{
    $sql = "insert into tbl_employee (
      	
      nameemployee,
      dateemployee,
      addressemployee,
      emailemployee,
      phoneemployee,
      genderemployee) values('$name','$date','$address','$email','$phone','$gender')";
      $sql1=("insert into tbl_login (username , password)values('$username','$password')");
    mysqli_query($con, $sql);
    mysqli_query($con, $sql1);
		echo "chúc mừng bạn đã thêm thành công";
		header('location:index.php?quanly=resgister');
	}
		
	
		
	}
?>
<section id="register">
<header>

              <h1 class="text-center text-primary fontHeading border border-secondary border-left-0 border-right-0">Register Employee</h1>
              
            </header>
            <form id="frmRegister" class="col-md-12 offset-md-12" action="" method="post">
              <div class="form-group">
                <label for="username">Username <span class="text-danger">*</span></label>
                <input id="username" type="text" name="username" class="form-control" placeholder="Enter username">
               
              </div>
              <div class="form-group">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input id="password" type="password" name="password" class="form-control" placeholder="Enter password">
              </div>
              <br>
              <div class="form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input id="name" type="text" name="name" class="form-control" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label>Gender <span class="text-danger">*</span></label><br>
                <div class="custom-control custom-radio custom-control-inline">
                  <input class="form-check-input custom-control-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label custom-control-label" for="male">Male</label>
                </div>
                <div id="gender" class="custom-control custom-radio custom-control-inline">
                  <input class="form-check-input custom-control-input" type="radio" name="gender" id="female" value="female">
                  <label class="form-check-label custom-control-label" for="female">Female</label>
                </div>
              </div>
              <div class="form-group">
                <label for="birthday">Birthday <span class="text-danger">*</span></label>
                <input id="birthday" type="date" name="date" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Enter your email address">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Enter your phone">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" class="form-control"  rows="3" placeholder="Enter your address"></textarea>
              </div>
              <div class="text-center">
                <p class="small text-muted mb-1">We'll never share your information with anyone else.</p>
                <button  id ="btnFromRegister" name="btnFromRegister" class="btn btn-outline-primary" type="submit">Register</button>
              </div>
            </form>
</section>
  <script src="../JS/jquery.min.js"></script>
  <script src="../JS/bootstrap.bundle.min.js"></script>
  <script src="../JS/bootstrap.min.js"></script>
  <script src="../JS/layout.js"></script>
</body>

</html>