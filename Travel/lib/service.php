<?php
	require_once '../lib/connectdb.php';
	function getImageAvatar() {
		$conn = db_connect();
		$email = $_SESSION['name'][0];
		$str = "SELECT * FROM trangcanhan WHERE email ='".$email."' ";
		$row = db_single($conn, $str);
		
		return $row["avatar"];
	}
	function getBVList($conn) {
	return db_query($conn, "SELECT * FROM baiviet");
	}
?>