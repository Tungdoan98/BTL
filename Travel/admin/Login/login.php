
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="content/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="content/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="content/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="content/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="content/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="content/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="content/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="content/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="content/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="content/css/util.css">
	<link rel="stylesheet" type="text/css" href="content/css/main.css">
<!--===============================================================================================-->
</head>
<body >
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100" >
				<form action="LoginAdmin.php" method="POST" class="login100-form validate-form" >
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<img src="..\image\logo.png" width="200" height="70" style="padding-left: 0;">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nhập email đăng nhập">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email đăng nhập"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Mật khẩu"></span>
					</div>
					<?php 
						if(@$_GET['Empty'] == true){
					?>
						<p style="text-align: center;color: red"><?php echo $_GET['Empty'] ?></p>
					<?php 
					 	}
					?>	
										
					<label>
                    	<input type="checkbox" name="remember-me" id="remember-me"> Nhớ Mật Khẩu
                	</label>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login" >
								Đăng Nhập
							</button>
						</div>
					</div>

					<div style="margin-top: -80px" class="text-center p-t-115">
						<span class="txt1">
							Chưa có tài khoản?
						</span>

						<a class="txt2" href="register.php">
							Đăng kí
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="content/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="content/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="content/vendor/bootstrap/js/popper.js"></script>
	<script src="content/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="content/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="content/vendor/daterangepicker/moment.min.js"></script>
	<script src="content/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="content/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="content/js/main.js"></script>

</body>
</html>