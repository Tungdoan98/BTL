<?php 
	session_start();
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	require '../lib/controls.php';
	$img = getImageAvatar();
	$conn = db_connect();
	$email = $_SESSION['name'][0];
	$result = getBVList($conn,$email);
	while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id"];
			$title = $row["title"];
			$image = $row["image"];
			$date = $row["time"];
			// echo "<tr><td>".$id."</td><td>".$title."</td></tr>";
			printBV($img,$id,$title,$image,$date);
		}
	db_close($conn);
?>