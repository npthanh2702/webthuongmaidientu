<?php
include "config.php";
$sql = "select * from tbl_product where idproduct = '$_GET[idproduct]' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
			if(isset($_POST["process"]))
			{
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
				if ($anh2 != null) {
					$path = "../IMG/";
					$tmp_name = $_FILES['c_img2']['tmp_name'];
					$anh = $_FILES['c_img2']['name'];
					move_uploaded_file($tmp_name, $path . $anh2);
				}
				$anh3 = $_FILES['c_img3']['name'];
				if ($anh3 != null) {
					$path = "../IMG/";
					$tmp_name = $_FILES['c_img3']['tmp_name'];
					$anh = $_FILES['c_img3']['name'];
					move_uploaded_file($tmp_name, $path . $anh3);
				}
					$sql = "update tbl_product set product_image_1 = '$anh1' and product_image_2 = '$anh2' and product_image_3 = '$anh3' where idproduct ='$_GET[iproduct]'";
					mysqli_query($con,$sql);
					header('location:location:indexadmin.php?quanly=product');

					$sql = "update tbl_product set product_name = '$name'  , product_price = '$gia', product_description = '$chitiet' , product_url = '$url' where idproduct = '$_GET[idproduct]' ";
					mysqli_query($con,$sql);
					header('location:indexadmin.php?quanly=product');
			
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
				<td>ID PRODUCT</td>
				<td><input type="number" name="masp" value="<?php echo $row['idproduct']; ?>" disabled ></td>
			</tr>
			<tr>
				<td>URL</td>

				<td><input type="text" name="url" value="<?php echo $row['product_url']; ?>" maxlength="100" minlength="5"></td>
			</tr>
			
			<tr>
				<td>NAME PRODUCT</td>
				<td><input type="text" name="name" value="<?php echo $row['product_name']; ?>" maxlength="100" minlength="5"></td>
			</tr>
			<tr>
				<td>DESCRIPTION</td>
				<td><input type="text" name="chitiet"  value="<?php echo $row['product_description']; ?>" maxlength="200" minlength="5" ></td>
			</tr>
			<tr>
				<td>PRICE</td>
				<td><input type="number" name="gia" value="<?php echo $row['product_price']; ?>" maxlength="10" minlength="3" >
			
			</td>
			</tr>
            <tr>
				<td>IMAGE 1</td>
				<td><input type="file" name="c_img1"></td>
				<td><img src="../IMG/<?php echo $row['product_image_1']; ?>" style="max-width: 100px;"></td>
			</tr>
			<tr>
				<td>IMAGE 2</td>
				<td><input type="file" name="c_img2"></td>
				<td><img src="../IMG/<?php echo $row['product_image_2']; ?>" style="max-width: 100px;"></td>
			</tr>
			<tr>
				<td>IMAGE 3</td>
				<td><input type="file" name="c_img3"></td>
				<td><img src="../IMG/<?php echo $row['product_image_3']; ?>" style="max-width: 100px;"></td>
			</tr>

				<tr>
				<td></td>

				<td><input  class="btn btn-primary" type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>