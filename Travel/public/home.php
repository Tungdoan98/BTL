<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="..\css\home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="..\css\menu.css">
	<link rel="stylesheet" type="text/css" href="..\css\popup1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
	
</head>
<body>
	<?php 
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	require '../lib/controls.php';
	$img = getImageAvatar();
	include("../include/header.php");
	?>
	<section style="padding-top: 4.3em;">
		<div id="div5">
			<h5 style="padding-top: 1em;">Địa điểm du lịch nổi bật</h5>
			<div class="class_khung_image">
				<img class="class_image" src="..\image\Sapa.jpg">
				<strong><em>SaPa</em></strong>
			</div>
			<div class="class_khung_image">
				<img class="class_image" src="..\image\tam_dao.jpg">
				<strong><em>Tam Đảo</em></strong>
			</div>
			<div class="class_khung_image">
				<img class="class_image" src="..\image\MaiChau.jpg">
				<strong><em>Mai Châu</em></strong>
			</div>
		</div>
		<div id="div4">
			<div id="div_trangthai">
				<div id="div_top" >
					<strong>Tạo bài viết</strong>
			    </div>
				<div id="div_trangthai_avt">
					<img id="div_avata_trangthai" src="..\public\upload\<?=$img ?>">
				</div>
				<div id="div_trangthai_note">
					<div style="max-width: 35em;" class="container">
						<div class="form-group">
							<textarea class="form-control" rows="3" cols="70" placeholder="Bạn đang nghĩ gì ?" id="comment"></textarea>
					 	</div>
					</div>
					<div id="button1" class="div_trangthai_upload">
						<img style="width: 30px;height: 25px;" 
									src="..\image\icon_image2.png">
						<strong style="margin-top: 10px;">Ảnh</strong>
					</div>
						<input style="display: none;" id="button2" type="file" name="aaa">
					<div class="div_trangthai_upload" 
						style="width:150px!important ">
						<img style="width: 25px;height: 25px;" 
							src="..\image\icon_cam_xuc5.png">
						<strong style="margin-top: 10px;">Cảm Xúc</strong>
					</div>
					<button id="btn_dang"type="button" class="btn btn-primary">
							Đăng
					</button>	
				</div>
			</div>	
			<div style="margin-top:16em;width: 80%; " id="content" class="div_bai_dang">
					
			</div>
		</div>
		<div id="div3">
			<img style="width: 200px ;height: 100px;padding: 5%;margin-left: 12%;" src="..\image\logo.png">
			<div id="div_chucnang">
				<button type="button" class="btn div_chucnang btn-danger">BẢNG TIN</button><br>
				<button type="button" class="btn div_chucnang btn-primary">TRẢI NGHIỆM</button><br>
				<button type="button" class="btn div_chucnang btn-success">TOUR</button><br>
				<button type="button" class="btn div_chucnang btn-info">KHÁCH SẠN</button><br>
				<button type="button" class="btn div_chucnang btn-warning">MUA SẮM</button><br>		
			</div>
		</div>	    
	</section>	
</body>
<script type="text/javascript">
	$(document).ready(         
		function() {
			$.ajax({
				url : "../login/data1.php",
				type : "Get",
				DataType : 'json',
				success : function(res) {
					console.log(res);
					$( '#content' ).html(res);
				},
				error : function() {
					alert("error occurred");
				}
			}
			);
		});
	
	</script> 
</html>