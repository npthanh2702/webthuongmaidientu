<?php
include "config.php";

if (isset($_POST["process"])) {
	$makh = mysqli_escape_string($con, $_POST["makh"]);
	$name = mysqli_escape_string($con, $_POST["name"]);
	$date = mysqli_escape_string($con, $_POST["date"]);
	$add = mysqli_escape_string($con, $_POST["add"]);
	$phone = mysqli_escape_string($con, $_POST["phone"]);
	$email = mysqli_escape_string($con, $_POST["email"]);
	$gender = mysqli_escape_string($con, $_POST["gender"]);
	if ($makh == "" || $name == "" || $date == "" || $add == ""||$phone==""||$email==""||$gender=="") {
		echo "Bạn vui lòng nhập đầy đủ thông tin";
	}
	else{
		$sql = "insert into tbl_customer(idcustomer,namecustomer,addresscustomer,datecustomer,phonecustomer,emailcustomer,gendercustomer) values('$makh','$name','$add','$date','$phone','$email','$gender')";
		$query_run = mysqli_query($con, $sql);
		echo "chúc mừng bạn đã thêm thành công";
		header('location:indexadmin.php?quanly=customer');
	}
		
	
	}
            
    
?>


		<br />
		<h3 align="center">THÊM KHÁCH HÀNG</h3>
		<br />
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<table width="500" border="1" style="margin: auto;" class="table table-hover">
			<tr>
				<td>Mã Khách Hàng<span class="text-danger">*</span></td>
				<td><input type="number" name="makh" maxlength="11"  required></td>
			</tr>
			<tr>
				<td>Họ & Tên<span class="text-danger">*</span></td>
				<td><input type="text" name="name"  maxlength="50" minlength="3" required></td>
			</tr>
			<tr>
				<td>Ngày Sinh<span class="text-danger">*</span></td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td>Địa Chỉ<span class="text-danger">*</span></td>
				<td>
				<textarea id="address" name="add"  maxlength="100" minlength="5" required></textarea>
			</td>
			</tr>
			<tr>
				<td>Phone<span class="text-danger">*</span></td>
				<td><input type="number" name="phone"  maxlength="11" minlength="10" required></td>
			</tr>
			<tr>
				<td>Email<span class="text-danger">*</span></td>
				<td><input type="email" name="email"  maxlength="50" minlength="13" required></td>
			</tr>
			<tr>
				<td>Giới Tính<span class="text-danger">*</span></td>
				<td>
				<div>
					<label class="btn btn-primary">
						<input type="radio" name="gender" id="male"  value="Male" autocomplete="off" checked> Male
					</label>
					<label class="btn btn-primary">
						<input type="radio" name="gender" id="female" value ="Female" autocomplete="off"> Female
					</label>
				</div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
				<label class=""btn btn-primary>
				<input class="btn btn-primary" type="submit" name="process" value="Update">
				</label>
				</td>
			</tr>
		</table>
	</form>
</div>