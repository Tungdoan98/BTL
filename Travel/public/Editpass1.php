<?php session_start();?>
<?php  
require_once '../lib/connectdb.php';
if (isset($_POST)) {
	$txtpass      = $_POST['txtpass'];
	$pass         = md5($txtpass);
	$txtnewpass   = $_POST['txtnewpass'];
	$newpass      = md5($txtnewpass);
	$email        = $_SESSION['name'][0];
	$conn = db_connect();
	$query = "SELECT * FROM dangnhap WHERE email ='".$email."' and password = '".$pass."' ";
	$result = db_query($conn, $query);
	if(mysqli_fetch_assoc($result)){
		$query1 = "UPDATE dangnhap SET password ='".$newpass."' WHERE email ='".$email."' ";
		$query2 = "UPDATE dangky SET password ='".$newpass."' WHERE email ='".$email."' ";
		db_query($conn, $query1);
		db_query($conn, $query2);
		echo ("1");
	}
	else{
		echo ("Sai mật khẩu !");
	}
	db_close($conn);
}
else{
	echo ("error !");
}
?>