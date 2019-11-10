<?php session_start();?>
<?php  
require_once '../lib/connectdb.php';
if (isset($_POST)) {
	$txtHo     = $_POST['txtHo'];
	$txtTen   = $_POST['txtTen'];
	$hoten = $txtHo." ".$txtTen ;
	$email        = $_SESSION['name'][0];
	$conn = db_connect();
	$query1 = "UPDATE dangky SET Hoten ='".$hoten."' WHERE email ='".$email."' ";
	db_query($conn, $query1);
	echo ("1");
}
else{
	echo ("error !");
}
?>