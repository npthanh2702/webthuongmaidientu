<?php
			include "config.php";
				$sql = "select * from tbl_customer where idcustomer = '$_GET[idcustomer]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);


			if(isset($_POST["process"]))
			{
                $makh = mysqli_escape_string($con, $_POST["makh"]);
                $name = mysqli_escape_string($con, $_POST["name"]);
                $date = mysqli_escape_string($con, $_POST["date"]);
                $add = mysqli_escape_string($con, $_POST["add"]);
                $phone = mysqli_escape_string($con, $_POST["phone"]);
                $email = mysqli_escape_string($con, $_POST["email"]);
                $gender = mysqli_escape_string($con, $_POST["gender"]);
            

  
                $sql = "update tbl_customer set idcustomer = '$makh'  , namecustomer = '$name', addresscustomer = '$add' , datecustomer = '$date' ,phonecustomer ='$phone', emailcustomer='$email', gendercustomer='$gender'
                where idcustomer = '$_GET[idcustomer]' ";
					mysqli_query($con,$sql);
					header('location:indexadmin.php?quanly=customer');
			}

?>

<div>
	<div>	<br />
			<h3 align="center"><a href="#">THÊM NỘI DUNG</a></h3>
			<br />
		</div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;" class="table table-bordered">
			
			<tr>
				<td>Mã Khách Hàng</td>
				<td><input type="number" name="makh" value="<?php echo $row['idcustomer']; ?>" disabled></td>
			</tr>
			<tr>
				<td>Họ & Tên</td>
				<td><input type="text" name="name" value="<?php echo $row['namecustomer']; ?>"   maxlength="50" minlength="3"></td>
			</tr>
			<tr>
				<td>Ngày Sinh</td>
				<td><input type="date" name="date"  value="<?php echo $row['datecustomer']; ?>" ></td>
			</tr>
			<tr>
				<td>Địa Chỉ</td>
				<td><input type="text" name="add" value="<?php echo $row['addresscustomer']; ?>"   maxlength="100" minlength="5"></td>
            </tr>
            <tr>
				<td>Phone</td>
				<td><input type="number" name="phone" value="<?php echo $row['phonecustomer']; ?>" maxlength="11" minlength="10" ></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $row['emailcustomer']; ?>" maxlength="50" minlength="13" ></td>
			</tr>
			<tr>
				<td>Giới Tính </td>
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
				<td><input  class="btn btn-primary" type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>