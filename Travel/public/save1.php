<?php session_start();?>
<?php
require_once '../lib/connectdb.php';
require '../lib/service.php';
require '../lib/controls.php';
$img = getImageAvatar();
if (isset($_POST)) {
    $title = $_POST["comment"];
	$email = $_SESSION['name'][0];
	$name  = $_SESSION['name'][1];
	$conn = db_connect();
	$query1= "INSERT INTO `baiviet` (`id`, `email`, `title`, `image`, `time`) VALUES (NULL, '$email', '$title', '', '') ";
	db_query($conn, $query1);
	$result = getBVList($conn,$email);
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row["id"];
		$title1 = $row["title"];
		$image = $row["image"];
		$date = $row["time"];
		printBV($img,$id,$title1,$image,$date,$name);
	}
	db_close($conn);
}
?>