<?php
	require 'db.php';
	error_reporting(E_ALL & ~ E_NOTICE);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hiển thị sinh viên</title>
		<style type="text/css" link="css/ionic.css"></style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		
		<div class="container">
			<div><h2>Danh sách tất cả sinh viên</h2></div>
			<table class="table table-striped">
				<tr> 
				 <td>STT</td>
				 <td>Mã SV</td>
				 <td>Họ tên</td>	 
				 <td>Phái</td>
				 <td>Ngày Sinh</td>
				 <td>Lớp</td>
				</tr>

<?php
	$con->query("set names utf8");
	$q = mysqli_query($con, "SELECT * FROM sinhvien");
	if(mysqli_num_rows($q)>0)
	{
		$i=1;
		while($row = mysqli_fetch_array($q,MYSQLI_ASSOC))
		{

			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['MSSV']."</td>";
			echo "<td>".$row['HOTENSV']."</td>";
			if($row['PHAI']=="TRUE")

			echo "<td>Nam</td>";
			else
			echo "<td>Nữ</td>";
			echo "<td>".$row['NGAYSINH']."</td>";
			echo "<td>".$row['MSLOP']."</td>";
			echo "</tr>";
			$i++;
?>
				
				
<?php 
		} // whille
	} // if
 ?>
			</table>

		</div>
	</body>
</html>