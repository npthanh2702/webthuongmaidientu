<?php
		include "config.php";
		$sql = "update tbl_employee set deleteemployee=1 where idemployee = '$_GET[idemployee]'";
		mysqli_query($con,$sql);
		header('location:indexadmin.php?quanly=employee');
?>