<?php 
session_start();

session_unset();
session_destroy();

header("Location: login.php");
?>
 <?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <div class="text-right mb-3">
    <button class="btn btn-primary"><a href="logout.php" style="color: #fff;">Đăng xuất</a></button>
    </div>

<?php
} 
?>