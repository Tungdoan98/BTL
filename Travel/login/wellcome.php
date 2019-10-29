<?php
	session_start();
	if(isset($_SESSION['name'])){
		$str = $_SESSION['name'];
		$arr = explode(" ",$str );
		echo($arr[count($arr)-1]);
		echo "<a href='logout.php?logout'>logout</a>";
	}
	else{
		header("location:login.php");
	}  
?>