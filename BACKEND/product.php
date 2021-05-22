<?php
include "config.php";
$sql = "select * from tbl_product";
$result = mysqli_query($con, $sql);
?>

<div class="infor">
<br />
			<h3 align="center"><a href="#">DANH SÁCH SẢN PHẨM</a></h3>
			<br />
			
	<table width="900" border="1px solid #f3f3f3;" text-align="center" style="margin-top: 10px; text-align: center;" class="table table-bordered">
	<div class="search" style="padding-left: 100px; margin-top: 20px;">

<?php
include("config.php");
if (isset($_POST["search"])) {
	$name_search = $_POST['nhap'];
	$sql = "select * from tbl_product where idproduct = '$name_search'";
	mysqli_query($con, $sql);
} else {
	$sql = "select * from tbl_product";
}
$result = mysqli_query($con, $sql);

?>
<form action="" method="POST" enctype="multipart/form-data">
	<tr>
		<input type="text" placeholder="Enter id please" name="nhap" size="80">
			<input type="submit" name="search" value="Tìm kiếm"  class="btn btn-primary">

	</tr>
</form>
</div>
		<tr>
			<th width="50px;">ID PRODUCT</th>
			<th width="50px;">URL</th>
			<th width="200px;">NAME PRODUCT</th>
			<th width="200px;">DESCRIPTION</th>
			<th width="100px;">PRICE</th>
			<th width="100px;">IMAGE</th>
			<th width="100px;">IMAGE</th>
			<th width="100px;">IMAGE</th>
			<th width="100px;"><a href="indexadmin.php?quanly=addproduct">Thêm</a></th>
		</tr>
		<?php while ($row = mysqli_fetch_array($result)) {
			# code...
		?>
			<tr>
				<td><?php echo $row['idproduct']; ?> </td>
				<td><?php echo $row['product_url']; ?></td>
				<td><?php echo $row['product_name']; ?></td>
				<td><?php echo $row['product_description']; ?></td>
				<td><?php echo $row['product_price']; ?></td>
				<td><img src="../IMG/<?php echo $row['product_image_1']; ?>"></td>
				<td><img src="../IMG/<?php echo $row['product_image_2']; ?>"></td>
				<td><img src="../IMG/<?php echo $row['product_image_3']; ?>"></td>

				<td><a href="indexadmin.php?quanly=editproduct&idproduct=<?php echo $row['idproduct']; ?>">Sửa</a>
					<a onclick="return window.confirm('Bạn muốn xóa không');" href="indexadmin.php?quanly=deleteproduct&idproduct=<?php echo $row['idproduct']; ?>">Xóa</a>
				</td>
			</tr>
		<?php } ?>

	</table>
</div>