<?php 
	session_start();
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	require '../lib/controls.php';
	$img = getImageAvatar();
	$email = $_SESSION['name'][0];
	$Hoten = getName($email);
	$conn = db_connect();
	$result = getBVList($conn,$email);
	while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			$title = $row["title"];
			$image = $row["image"];
			$date = $row["time"];
			// echo "<tr><td>".$id."</td><td>".$title."</td></tr>";
			printBV($img,$id,$title,$image,$date,$Hoten);
		}
	db_close($conn);
?>