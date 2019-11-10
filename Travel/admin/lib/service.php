<?php
	require_once '../lib/connectdb.php';
	function getUser($conn) {
		$str   = "SELECT * FROM dangky ";
	    return db_query($conn, $str);
	}
	function getEmai($conn,$id){
		$str   ="SELECT * FROM dangky WHERE id='".$id."'";
		$row = db_single($conn, $str);
		return $row["email"];
	}
	
?>