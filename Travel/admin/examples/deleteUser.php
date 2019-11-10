<?php 
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	$id = $_POST['del_id']; // lay dl 
	$conn = db_connect(); 
	$query = "DELETE FROM dangky WHERE id ='".$id."' ";
	db_query($conn, $query); // thu hien 
	$email = getEmai($conn,$id); // lay email
	$query1 = "DELETE FROM dangnhap WHERE email ='".$email."' ";
	db_query($conn, $query1);
	$query2 = "SELECT * FROM dangnhap WHERE email ='".$email."' ";
	$result = db_query($conn, $query2);
	if(mysqli_fetch_assoc($result)){
		echo ("Delete failure ");
	}
	else{
		echo ("Delete Success");	
	}
	db_close($conn);
?>