<?php
		include "config.php";
		$sql = "delete from tbl_product where idproduct = '$_GET[idproduct]'";
		mysqli_query($con,$sql);
		header('location:indexadmin.php?quanly=product');
?>