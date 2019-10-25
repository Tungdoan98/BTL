<?php 
	session_start();
	if(isset($_GET['logout'])){
		session_destroy();
		header("location:http://localhost/cntt3/Travel/login/login.php");
	}
 ?>