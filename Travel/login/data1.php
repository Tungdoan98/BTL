<?php 
	session_start();
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	require '../lib/controls.php';
	$conn = db_connect();
	$email = $_SESSION['name'][0];
	$Hoten = getName($email);
	$result = getBvBtList($conn);
	while($row = mysqli_fetch_assoc($result)) {
			$avatar = $row["avatar"];
			$title = $row["title"];
			$image = $row["image"];
			// echo "<tr><td>".$id."</td><td>".$title."</td></tr>";
			printBvBt($avatar,$title,$image,$Hoten);
		}
	db_close($conn);
?>