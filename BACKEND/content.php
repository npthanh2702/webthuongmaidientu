<?php
		
		if(isset($_GET["quanly"]))
		{
			$row = $_GET["quanly"];
		}
		else
			$row = "";
		if ($row == "customer") {
			include("customer.php");
		}
		if ($row == "addcustomer") {
			include("addcustomer.php");
		}	
		if ($row == "deletecustomer") {
			include("deletecustomer.php");
		}	
		if ($row == "editcustomer") {
			include("editcustomer.php");
		}	
		if ($row == "employee") {
			include("employee.php");
		}	
		if ($row == "addemployee") {
			include("addemployee.php");
		}
		if ($row == "deleteemployee") {
			include("deleteemployee.php");
		}
		if ($row == "editemployee") {
			include("editemployee.php");
		}	
		if ($row == "product") {
			include("product.php");
		}
		if ($row == "addproduct") {
			include("addproduct.php");
		}	
		if ($row == "deleteproduct") {
			include("deleteproduct.php");
		}
		if ($row == "feedback") {
			include("feedback.php");
		}
		if ($row == "editproduct") {
			include("editproduct.php");
		}
?>