<?php session_start();?>

<?php 
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	if (isset($_POST["submit_avatar"])) {
		// Kiểm tra phương thức gửi form đi có phải là POST hay ko ?
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		    // Kiểm tra quá trình upload file có bị lỗi gì không ?
		    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
		    	// Mảng chưa định dạng file cho phép
		        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
		        // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
		        $filename = $_FILES["photo"]["name"];
		        $filetype = $_FILES["photo"]["type"];
		        $filesize = $_FILES["photo"]["size"];
		    
		        // Kiểm tra định dạng file .jpg, png,...
		        $ext = pathinfo($filename, PATHINFO_EXTENSION);
		        // Nếu không đúng định dạng file thì báo lỗi
		        if(!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");
		    
		        // Cho phép kích thước tối đa của file là 5MB
		        $maxsize = 5 * 1024 * 1024;
		        // Nếu kích thước lớn hơn 5MB thì báo lỗi
		        if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
		    
		        // Kiểm tra file ok hết chưa
		        if(in_array($filetype, $allowed)){
		            // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
		            if(file_exists("upload/" . $_FILES["photo"]["name"])){
		                echo $_FILES["photo"]["name"] . " đã tồn tại";
		                $email = $_SESSION['name'][0];
		                $str1 = $_FILES["photo"]["name"];
		                $conn = db_connect();
						$query = "UPDATE trangcanhan SET 
						avatar='".$str1."' WHERE email='".$email."'";
						db_query($conn, $query);
						header("location:http:trangcanhan.php");
		            } else{
		            	// Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
		            	$email = $_SESSION['name'][0];
		                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
		                // Thông báo thành công
		                echo "Upload file thành công";
		                echo $_FILES["photo"]["name"];
		                echo $email;
		                $conn = db_connect();
						$query = "UPDATE trangcanhan SET 
						avatar='".$_FILES["photo"]["name"]."' WHERE email='".$email."'";
						db_query($conn, $query);  
						$str = getImageAvatar();
						echo "Ten avatar la :".$str ; 
						header("location:http:trangcanhan.php");  
						db_close($conn);   
		            } 
		        } else{
		            echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
		        }
		    } else{
		        echo "Lỗi: " . $_FILES["photo"]["error"];
		    }
		}	
	}
	else{
		echo("That bai");
	}
 ?>