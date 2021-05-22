<?php
include "config.php";
$sql = "select * from tbl_customer where deletecustomer=0";
$result = mysqli_query($con, $sql);
?>
<div class="infor">
<br />
			<h3 align="center"><a href="#">DANH SÁCH KHÁCH HÀNG</a></h3>
			<br />

	<table width="900" border="1px solid #f3f3f3;" text-align="center" style="margin-top: 10px; text-align: center;" class="table table-bordered">
	
	<div class="search" style="padding-left: 100px; margin-top: 20px;">

<?php
include("config.php");
if (isset($_POST["search"])) {
	$name_search = $_POST['nhap'];
	$sql = "select * from tbl_customer where idcustomer = '$name_search'";
	mysqli_query($con, $sql);
} else {
	$sql = "select * from tbl_customer";
}
$result = mysqli_query($con, $sql);

?>
<form action="" method="POST" enctype="multipart/form-data">
	<tr>
		<input type="text" placeholder="Enter id please" name="nhap" size="80">
			<input type="submit" name="search" value="Tìm kiếm"   class="btn btn-primary">

	</tr>
</form>
</div>
		
		<tr>
			<th width="50px;">Mã Khách Hàng</th>
			<th width="50px;">Họ & Tên</th>
			<th width="200px;">Ngày Sinh</th>
			<th width="200px;">Phone</th>
			<th width="100px;">Email</th>
			<th width="200px;">Địa Chỉ</th>
			<th width="200px;">Giới tính</th>
			<th width="100px;"><a href="indexadmin.php?quanly=addcustomer">Thêm</a></th>
		</tr>
		<?php while ($row = mysqli_fetch_array($result)) {
			# code...
		?>
			<tr>
				<td><?php echo $row['idcustomer']; ?> </td>
				<td><?php echo $row['namecustomer']; ?></td>
				<td><?php echo $row['datecustomer']; ?></td>
				<td><?php echo $row['phonecustomer']; ?></td>
				<td><?php echo $row['emailcustomer']; ?></td>
				<td><?php echo $row['addresscustomer']; ?></td>
				<td><?php echo $row['gendercustomer']; ?></td>
				<td><a href="indexadmin.php?quanly=editcustomer&idcustomer=<?php echo $row['idcustomer']; ?>">Sửa</a>
					<a onclick="return window.confirm('Bạn muốn xóa không');" href="indexadmin.php?quanly=deletecustomer&idcustomer=<?php echo $row['idcustomer']; ?>">Xóa</a>
				</td>
			</tr>
		<?php } ?>

	</table>
</div>