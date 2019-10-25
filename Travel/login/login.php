<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập , Đăng ký</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="..\js\day.js" ></script>
	</style>
</head>
<body style="background-color: #E9EBEE" onload="loadform()">
	<header>
		<div id="div_logo">
			<div id="div_logo1">
				<a href="http://localhost/cntt3/Travel/login/login.php">
					<img src="..\image\logo.png" width="200" height="70" style="padding-left: 0;">
				</a>
			</div>
		</div>
		<div id="div_user_pass">
			<form action="process.php" method="POST">
				<div class="div_login">
					<p style="margin: 1% 0 1% 0 ;font-size: 15px;">Email or phone number :</p>
					<input type="text" name="email" style="border-radius: 5px;font-size: 15px;">
				</div>
				<div class="div_login">
					<p style="margin: 1% 0 1% 0 ;font-size: 15px;">Password :</p>
					<input type="password" name="password" style="border-radius: 5px;font-size: 15px;">
				</div>
				<div class="div_login" id="div_click">
					<button id="button_login" name="login" class="btn btn-info">Login</button>	
				</div>
			</form>	
		</div>	
	</header>
	<div id="div1">
		<img src="..\image\anh1.png">
	</div>
	<div id="div2">
		<form action="signup.php" method="POST">
			<div id="div3">
				<h2>Tạo Tài Khoản Mới</h2>
				<label style="display: block;">Nhanh chóng dễ dàng</label>
				<input class="class_border_radius_5px" type="text" name="txtHo" size="20" placeholder="Họ" required>
				<input class="class_border_radius_5px" type="text" name="txtTen" size="20" placeholder="Tên" required>	
				<input class="class_border_radius_5px" type="email" name="txtemail" size="46" placeholder="Số di động hoặc Email" required>
				<input class="class_border_radius_5px" type="text" name="txtpassword" size="46" placeholder="Nhập mật khẩu mới" required>
				<p style="margin-top: 1em;color: #666666"><strong>Ngày Sinh</strong></p>
				<select id="day" name="day">
				</select>
				<select id="month" name="month" onchange="loadDay()">
				</select>
				<select id="year" name="year" onchange="loadDay()">
				</select>
				<p style="margin-top: 1em;color: #666666"><strong>Giới Tính</strong></p>
				<input type="radio" name="gioitinh" value="Nam"> <label>Nam</label>
				<input type="radio" name="gioitinh" value="Nu"> <label>Nữ</label>
				<input type="radio" name="gioitinh" value="Nu"> <label>Khác</label>
				<br>
				<button style="margin-top: 0.8em;" type="submit" name="signup" id="button_dangKy"><strong>Đăng Ký</strong></button>
			</div>
		</form>
	</div>
	<?php 
		if(@$_GET['Empty'] == true){
	?>
	 	<div class="msg-error"> <?php echo $_GET['Empty'] ?></div>
	<?php 
	 	}
	?>

	<?php 
		if(@$_GET['Invalid'] == true){
	?>
	 	<div class="msg-error"> <?php echo $_GET['Invalid'] ?></div>
	<?php 
	 	}
	?>

	<?php 
		if(@$_GET['Notification'] == true){
	?>
	 	<div class="msg-error1"> <?php echo $_GET['Notification'] ?></div>
	<?php 
	 	}
	?>
	  
</body>
</html>