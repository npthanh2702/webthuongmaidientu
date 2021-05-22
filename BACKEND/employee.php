<?php
include "config.php";
$sql = "select * from tbl_employee";
$result = mysqli_query($con, $sql);
?>

<div class="infor">
<br />
			<h3 align="center"><a href="#">DANH SÁCH NHÂN VIÊN</a></h3>
			<br />
			
	<table width="900" border="1px solid #f3f3f3;" text-align="center" style="margin-top: 10px; text-align: center;" class="table table-bordered">
	<div class="search" style="padding-left: 100px; margin-top: 20px;">

<?php
include("config.php");
if (isset($_POST["search"])) {
	$name_search = $_POST['nhap'];
	$sql = "select * from tbl_employee where idemployee = '$name_search'";
	mysqli_query($con, $sql);
} else {
	$sql = "select * from tbl_employee";
}
$result = mysqli_query($con, $sql);

?>
<form action="" method="POST" enctype="multipart/form-data">
	<tr>
		<input type="text" placeholder="Enter id please" name="nhap" size="80%">
		<input type="submit" name="search" value="Tìm kiếm"  class="btn btn-primary">

	</tr>
</form>
</div>
		<tr>
			<th width="50px;">Mã Nhân Viên</th>
			<th width="50px;">Họ & Tên</th>
			<th width="200px;">Ngày Sinh</th>
			<th width="200px;">Phone</th>
			<th width="100px;">Email</th>
			<th width="200px;">Địa Chỉ</th>
			<th width="200px;">Giới tính</th>
			<th width="100px;"><a href="indexadmin.php?quanly=addemployee">Thêm</a></th>
		</tr>
		<?php while ($row = mysqli_fetch_array($result)) {
			# code...
		?>
			<tr>
				<td><?php echo $row['idemployee']; ?> </td>
				<td><?php echo $row['nameemployee']; ?></td>
				<td><?php echo $row['dateemployee']; ?></td>
				<td><?php echo $row['phoneemployee']; ?></td>
				<td><?php echo $row['emailemployee']; ?></td>
				<td><?php echo $row['addressemployee']; ?></td>
				<td><?php echo $row['genderemployee']; ?></td>
				<td><a href="indexadmin.php?quanly=editemployee&idemployee=<?php echo $row['idemployee']; ?>">Sửa</a>
					<a onclick="return window.confirm('Bạn muốn xóa không');" href="indexadmin.php?quanly=deleteemployee&idemployee=<?php echo $row['idemployee']; ?>">Xóa</a>
				</td>
			</tr>
		<?php } ?>

	</table>
</div>