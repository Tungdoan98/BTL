<?php session_start();?>
<?php
require_once '../lib/connectdb.php';
require '../lib/service.php';
require '../lib/controls.php';
$img = getImageAvatar();
if (isset($_POST) && !empty($_FILES['file'])) {
	$title = $_POST["comment"];
	$email = $_SESSION['name'][0];
	$name  = $_SESSION['name'][1];
	$str1 = $_FILES['file']['name'];
    $duoi = explode('.', $_FILES['file']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    // Kiểm tra xem có phải file ảnh không
    if ($duoi === 'jpg' || $duoi === 'png' || $duoi === 'gif' ||$duoi ='jpeg') {
    	if(file_exists("upload/" . $_FILES['file']['name'])){
		    $conn = db_connect();
			$query1= "INSERT INTO `baiviet` (`id`, `email`, `title`, `image`, `time`) VALUES (NULL, '$email', '$title', '$str1', '') ";
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
        else{
        	if (move_uploaded_file($_FILES['file']['tmp_name'], "upload/" . $_FILES['file']['name'])) {
		        $conn = db_connect();
				$query1= "INSERT INTO `baiviet` (`id`, `email`, `title`, `image`, `time`) VALUES (NULL, '$email', '$title', '$str1', '') ";
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
	        } else { // nếu không thành công
	            echo ("Error occured !");
	        }
        }
    } else { // nếu không phải file ảnh
        echo ("Chỉ được upload ảnh");
    }
} 
?>