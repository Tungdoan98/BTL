<?php
	require_once '../lib/connectdb.php';
	require '../lib/service.php'; // goi vào hàm getUser()
	require '../lib/controls.php'; // goi vao ham printUser()
	$stt = 1;
	$conn = db_connect();
	$result = getUser($conn);
	while($row = mysqli_fetch_assoc($result)) { // mỗi 1 hàng dữ liệu gán và row
		$id = $row["id"];
		$email = $row["email"];
		$hoten = $row["Hoten"];
		$ngaysinh = $row["ngaysinh"];
		$gioitinh = $row["gioitinh"];
		printUser($stt,$id,$email,$hoten,$ngaysinh,$gioitinh);
		$stt++;
	}
?>