<?php 
	require_once '../lib/connectdb.php';
	$id = $_POST['del_id'];
	$conn = db_connect(); 
	$query = "DELETE FROM baiviet WHERE id =".$id." ";
	db_query($conn, $query);
	$query1 = "SELECT * FROM baiviet WHERE id =".$id." ";
	$result = db_query($conn, $query1);
	if(mysqli_fetch_assoc($result)){
		echo ("Delete failure ");
	}
	else{
		echo ("Delete Success");	
	}
	db_close($conn);
?>