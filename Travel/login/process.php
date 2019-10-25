<?php
	require_once '../lib/connectdb.php';
	session_start();
	if (isset($_POST["login"])) {

		$email    = $_POST["email"];
		$password = $_POST["password"];
		$pass     = md5($password);
		if(empty($email)|| empty($password)){
			header("location:login.php?Empty= Please Fill in the Blanks");
		}
		else
		{	
			$conn = db_connect();
			$query = "SELECT * FROM dangnhap WHERE email ='".$email."' and password = '".$pass."' ";
			$str   = "SELECT * FROM dangky WHERE email ='".$email."' ";
			$row = db_single($conn, $str);
			$result = db_query($conn, $query);
			if(mysqli_fetch_assoc($result)){
				$_SESSION["name"] = $row["Hoten"];
				header("location:http://localhost/cntt3/Travel/public/trangcanhan.php");
			}
			else{
				header("location:login.php?Invalid= Please Enter Correct Email and Password");
			}
			db_close($conn);
		}
	}
	else
	{
		echo("not working now guys");

	}
 ?>