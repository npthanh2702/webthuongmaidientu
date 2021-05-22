<?php
			include "config.php";
				$sql = "select * from tbl_employee where idemployee = '$_GET[idemployee]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);


			if(isset($_POST["process"]))
			{
                $manv = mysqli_escape_string($con, $_POST["manv"]);
                $name = mysqli_escape_string($con, $_POST["name"]);
                $date = mysqli_escape_string($con, $_POST["date"]);
                $add = mysqli_escape_string($con, $_POST["add"]);
                $phone = mysqli_escape_string($con, $_POST["phone"]);
                $email = mysqli_escape_string($con, $_POST["email"]);
                $gender = mysqli_escape_string($con, $_POST["gender"]);
        
                $sql = "update tbl_employee set idemployee = '$manv'  , nameemployee = '$name', addressemployee = '$add' , dateemployee = '$date' ,phoneemployee ='$phone', emailemployee='$email', genderemployee='$gender'
                where idemployee = '$_GET[idemployee]' ";
					mysqli_query($con,$sql);
					header('location:indexadmin.php?quanly=employee');
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
				<td>Mã Nhân Viên</td>
				<td><input type="number" name="manv" value="<?php echo $row['idemployee']; ?>" disabled ></td>
			</tr>
			<tr>
				<td>Họ & Tên</td>
				<td><input type="text" name="name" value="<?php echo $row['nameemployee']; ?>" maxlength="50" minlength="3" ></td>
			</tr>
			<tr>
				<td>Ngày Sinh</td>
				<td><input type="date" name="date"  value="<?php echo $row['dateemployee']; ?>"></td>
			</tr>
			<tr>
				<td>Địa Chỉ</td>
				<td><input type="text" name="add" value="<?php echo $row['addressemployee']; ?>" maxlength="100" minlength="5"></td>
            </tr>
            <tr>
				<td>Phone</td>
				<td><input type="number" name="phone" value="<?php echo $row['phoneemployee']; ?>" maxlength="11" minlength="10"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $row['emailemployee']; ?>"maxlength="50" minlength="13" ></td>
			</tr>
			<tr>
				<td>Giới Tính</td>
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
				<td><input class="btn btn-primary" type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>