<?php 
	require_once '../lib/connectdb.php';

	if (isset($_POST["signup"])) {
		$ho        = $_POST["txtHo"];
		$ten       = $_POST["txtTen"];
		$email     = $_POST["txtemail"];
		$password  = $_POST["txtpassword"];
		$day       = $_POST["day"];
		$month     = $_POST["month"];
		$year      = $_POST["year"];
		$gioitinh  = $_POST["gioitinh"];

		$ngaysinh  = $year ."-".$month ."-".$day;
		$hoten     = $ho ." ".$ten;
		$pass      = md5($password);

		$conn = db_connect();
		$query = "SELECT * FROM dangnhap WHERE email ='".$email."' ";
		$query1 = "INSERT INTO `dangky` (`id`, `Hoten`, `email`, `password`, `ngaysinh`, `gioitinh`) VALUES (NULL, '$hoten', '$email', '$pass', '$ngaysinh', '$gioitinh') ";
		$query2 = "INSERT INTO `dangnhap` (`email`, `password`) VALUES ('$email', '$pass') ";
		$query3 = "INSERT INTO `trangcanhan` (`id`, `email`, `avatar`, `coverImage`) VALUES (NULL, '$email', 'avatar.png', NULL) ";
		$result = db_query($conn, $query);
		if(mysqli_fetch_assoc($result)){
			header("location:login.php?Invalid= Email already exists, Registration failed");
		}
		else{
			db_query($conn, $query2);
			db_query($conn, $query1);
			db_query($conn, $query3);
			header("location:login.php?Notification= Sign Up Success");
		}
		db_close($conn);
	}
?>