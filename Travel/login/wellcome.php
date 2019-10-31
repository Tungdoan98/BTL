<?php
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	require '../lib/controls.php';
	session_start();
	if(isset($_SESSION['name'])){
		$str = $_SESSION['name'][1];
		$arr = explode(" ",$str );
		echo($arr[count($arr)-1]);
		echo "<a href='logout.php?logout'>logout</a>";
		$email = $_SESSION['name'][0];
		$conn = db_connect();
		$result = getBVList($conn,$email);
		printBvList($result);
	}
	else{
		header("location:login.php");
	}  
?>