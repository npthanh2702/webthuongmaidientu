<?php
session_start();
include "../BACKEND/config.php";
if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: login.php?error= Chưa nhập tài khoản?");
        exit();
    } else if (empty($password)) {
        header("Location: login.php?error= Chưa nhập mật khẩu?");
        exit();
    } else {
        $sql = "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['idlogin'] = $row['idlogin'];
                header("Location: index.php?quanly=product");
                exit();
            } else {
                header("Location: login.php?error= Tài khoản hoặc mật khẩu sai?");
                exit();
            }
        } else {
            header("Location:login.php?error= Tài khoản hoặc mật khẩu sai?");
            exit();
        }
    } 
}
else {
    header("Location: home.php");
    exit();
}
?>