<?php
	require_once '../lib/connectdb.php';
	function getImageAvatar() {
		$conn = db_connect();
		$email = $_SESSION['name'][0];
		$str = "SELECT * FROM trangcanhan WHERE email ='".$email."' ";
		$row = db_single($conn, $str);
		
		return $row["avatar"];
	}
	function getBVList($conn,$email) {
		$str   = "SELECT * FROM baiviet WHERE email ='".$email."' ORDER BY id DESC ";
	    return db_query($conn, $str);
	}
	function getBvBtList($conn) {
		$str   = "SELECT baiviet.id,avatar,Hoten,image,title FROM baiviet,trangcanhan,dangky 
		WHERE baiviet.email = dangky.email AND baiviet.email = trangcanhan.email ORDER BY baiviet.id DESC ";
	    return db_query($conn, $str);
	}
	function getImageBV($id){
		$conn = db_connect();
		$str = "SELECT * FROM baiviet WHERE id ='".$id."' ";
		$row = db_single($conn, $str);
		return $row["image"];
	}
	function getTitleBV($id){
		$conn = db_connect();
		$str = "SELECT * FROM baiviet WHERE id ='".$id."' ";
		$row = db_single($conn, $str);
		return $row["title"];
	}
?>