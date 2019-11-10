<?php 
require_once '../lib/connectdb.php'; // khai bao thu vien để kết nối csdl
session_start(); //  tạo 1 session
    if (isset($_POST["login"])) { // khi click vào nút button thì mới thực hiện bên dưới hàm if
      	$email = $_POST["email"]; // lấy dữ liệu thẻ input với name = email
      	$pass = $_POST["password"]; // lấy dữ liệu thẻ input với name = password
      	$conn = db_connect(); // kết nối csdl
      	$query = " SELECT * FROM admin WHERE email = '".$email."' and password ='".$pass."' ";// viết câu truy vấn .
      	$result = db_query($conn, $query); // thự hiện câu truy vấn
      	$row = db_single($conn, $query);  // khi thự hiện câu truy vấn sẽ trả về 1 hàng dữ liệu row được coi là 1 mảng chứa cả hàng dữ liệu đó
      	if(mysqli_fetch_assoc($result)){ // nếu thự hiện đc câu truy vấn
			$_SESSION["admin"] = $row["email"];
			header("location:http://localhost:81/cntt3/Travel/admin/examples/UserManagement.php"); // chuyển đến trang quản lý người dùng
		}
		else{ // nếu ko thự hiện đc câu truy vấn
			header("location:http://localhost:81/cntt3/Travel/admin/login/login.php?Empty= Tài khoản, mật khẩu không chính xác"); // quay lại trang login
		}
		db_close($conn); // đóng kết lối
      } 
?>