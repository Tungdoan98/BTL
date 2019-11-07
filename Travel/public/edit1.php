<?php  
require_once '../lib/connectdb.php';
if (isset($_POST)) {
	$id = $_POST['edit_id'];
	$title = $_POST['title'];
	$conn = db_connect();
	$query = "UPDATE baiviet SET title ='".$title."' WHERE id =".$id." ";
	db_query($conn, $query);
	echo ("Edit Success !");
	db_close($conn);
}
else{
	echo ("Edit error !");
}
?>