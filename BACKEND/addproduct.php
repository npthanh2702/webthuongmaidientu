<?php
include "config.php";

if (isset($_POST["process"])) {
	$masp = mysqli_escape_string($con, $_POST["masp"]);
	$name = mysqli_escape_string($con, $_POST["name"]);
	$url = mysqli_escape_string($con, $_POST["url"]);
	$gia = mysqli_escape_string($con, $_POST["gia"]);
	$chitiet = mysqli_escape_string($con, $_POST["chitiet"]);
	$code = mysqli_escape_string($con, $_POST["code"]);
	$anh1 = $_FILES['c_img1']['name'];
	if ($anh1 != null) {
		$path = "../IMG/";
		$tmp_name = $_FILES['c_img1']['tmp_name'];
		$anh = $_FILES['c_img1']['name'];
		move_uploaded_file($tmp_name, $path . $anh2);
	}
	$anh2 = $_FILES['c_img2']['name'];
	if ($anh1 != null) {
		$path = "../IMG/";
		$tmp_name = $_FILES['c_img2']['tmp_name'];
		$anh = $_FILES['c_img2']['name'];
		move_uploaded_file($tmp_name, $path . $anh2);
	}
	$anh3 = $_FILES['c_img3']['name'];
	if ($anh1 != null) {
		$path = "../IMG/";
		$tmp_name = $_FILES['c_img3']['tmp_name'];
		$anh = $_FILES['c_img3']['name'];
		move_uploaded_file($tmp_name, $path . $anh3);
	}
	if ($masp == "" || $name == "" || $gia == "" || $chitiet == ""||$anh1==""||$anh2==""||$anh3==""||$url=="") {
		echo "Bạn vui lòng nhập đầy đủ thông tin";
	}
	else{
		$sql = "insert into tbl_product(
			
idproduct,
product_url,
product_name,
product_description,
product_price,
product_image_1,
product_image_2,
product_image_3) values('$masp','$url','$name','$chitiet', '$gia','$anh1' ,'$anh2','$anh3')";
		mysqli_query($con, $sql);
		echo"chúc mừng bạn đã thêm thành công";
		header('location:indexadmin.php?quanly=product');
	}
}

?>


		<br />
		<h3 text-align="center"><a href="#">THÊM SẢN PHẨM</a></h3>
		<br />
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="500" border="1" style="margin: auto;" class="table table-hover">
			<tr>
				<td>ID PRODUCT<span class="text-danger">*</span></td>
				<td><input type="number" name="masp" maxlength="11"  required></td>
			</tr>
			<tr>
				<td>URL<span class="text-danger">*</span></td>
				<td><input type="text" name="url" maxlength="100" minlength="5" required></td>
			</tr>
			<tr>
				<td>NAME PRODUCT<span class="text-danger">*</span></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>DESCRIPTION<span class="text-danger">*</span></td>
				<td><input type="text" name="chitiet" maxlength="200" minlength="5" required></td>
			</tr>
			<tr>
				<td>PRICE<span class="text-danger">*</span></td>
				<td><input type="text" name="gia" maxlength="10" minlength="3" required></td>
			</tr>
			<tr>
				<td> IMAGE 1<span class="text-danger">*</span></td>
				<td><input type="file" name="c_img1" required></td>
			</tr>
			<tr>
				<td> IMAGE 2 <span class="text-danger">*</span></td>
				<td><input type="file" name="c_img2" required></td>
			</tr>
			<tr>
				<td> IMAGE 3 <span class="text-danger">*</span></td>
				<td><input type="file" name="c_img3" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" name="process" value="Update"></td>
			</tr>
		</table>
	</form>
</div>