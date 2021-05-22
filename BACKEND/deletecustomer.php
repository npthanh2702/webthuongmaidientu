<?php
		include "config.php";
		$sql = "update tbl_customer set deletecustomer=1 where idcustomer = '$_GET[idcustomer]'";
		mysqli_query($con,$sql);
		header('location:indexadmin.php?quanly=customer');
?>