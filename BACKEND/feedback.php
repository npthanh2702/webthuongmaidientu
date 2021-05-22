<?php
include "config.php";
$sql = "select * from tbl_feedback ";
$result = mysqli_query($con, $sql);
?>

<div class="infor">
<br />
			<h3 align="center"><a href="#">DANH SÁCH PHẢN HỒI</a></h3>
			<br />

	<table width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" class="table table-bordered">
		<tr>
			<th width="50px;">Mã Feeb_Back</th>
			<th width="200px;">Tên</th>
			<th width="200px;">Email</th>
			<th width="100px;">Chủ Đề</th>
			<th width="200px;">Nội Dung</th>
			<th width="100px;"><a href="">Thêm</a></th>
		</tr>
		<?php while ($row = mysqli_fetch_array($result)) {
            # code...
		?>
			<tr>
				<td><?php echo $row['idfeedback']; ?> </td>
				<td><?php echo $row['namefeedback']; ?></td>
				<td><?php echo $row['emailfeedback']; ?></td>
				<td><?php echo $row['subfeedback']; ?></td>
                <td><?php echo $row['messagefeedback']; ?></td>
				<td><a href="#">Sửa</a>
					<a href="#">Xóa</a>
				</td>
			</tr>
		<?php } ?>

	</table>
</div>