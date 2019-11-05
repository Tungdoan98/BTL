<?php session_start();?>

<?php 
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
		$title = $_POST["title_comment"];
		// Kiểm tra phương thức gửi form đi có phải là POST hay ko ?
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		    // Kiểm tra quá trình upload file có bị lỗi gì không ?
		    if(isset($_FILES["photo1"]) && $_FILES["photo1"]["error"] == 0){
		    	// Mảng chưa định dạng file cho phép
		        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
		        // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
		        $filename = $_FILES["photo1"]["name"];
		        $filetype = $_FILES["photo1"]["type"];
		        $filesize = $_FILES["photo1"]["size"];
		    
		        // Kiểm tra định dạng file .jpg, png,...
		        $ext = pathinfo($filename, PATHINFO_EXTENSION);
		        // Nếu không đúng định dạng file thì báo lỗi
		        if(!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");
		    
		        $maxsize = 5 * 1024 * 1024;
		        // Nếu kích thước lớn hơn 5MB thì báo lỗi
		        if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
		    
		        // Kiểm tra file ok hết chưa
		        if(in_array($filetype, $allowed)){
		            // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
		            if(file_exists("upload/" . $_FILES["photo1"]["name"])){
		                $email = $_SESSION['name'][0];
		                $str1 = $_FILES["photo1"]["name"];
		                $conn = db_connect();
						$query1= "INSERT INTO `baiviet` (`id`, `email`, `title`, `image`, `time`) VALUES (NULL, '$email', '$title', '$str1', '') ";
						db_query($conn, $query1);
						echo ("Data added successfully !");
						header("location:http:trangcanhan.php");
						db_close($conn);
		            } else{
		            	// Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
		            	$email = $_SESSION['name'][0];
		                move_uploaded_file($_FILES["photo1"]["tmp_name"], "upload/" . $_FILES["photo1"]["name"]);
		                $conn = db_connect();
						$query1= "INSERT INTO `baiviet` (`id`, `email`, `title`, `image`, `time`) VALUES (NULL, '$email', '$title', '$str1', '') ";
						db_query($conn, $query1);  
						echo ("Data added successfully !");
						header("location:http:trangcanhan.php");  
						db_close($conn);   
		            } 
		        } else{
		            echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
		        }
		    } else{
		        $email = $_SESSION['name'][0];
		        $conn = db_connect();
				$query1= "INSERT INTO `baiviet` (`id`, `email`, `title`, `image`, `time`) VALUES (NULL, '$email', '$title', '', '') ";
				db_query($conn, $query1);  
				header("location:http:trangcanhan.php");  
				db_close($conn); 
		    }
		}
 ?>