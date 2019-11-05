<?php 
	session_start();
	if(isset($_GET['logout'])){
		session_destroy();
		header("location:http://localhost:81/cntt3/Travel/login/login.php");
	}
 ?>