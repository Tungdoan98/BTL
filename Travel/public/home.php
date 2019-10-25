<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="..\css\home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="..\css\menu.css">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="..\js\menu.js"></script>
	
</head>
<body>
	<header>
		<div id="div_header">
			<div id="div1">
				<div id="div_search">
					<input style="border-radius: 5px;border-style: solid; border-color: #808080;" type="text" name="search" size="40">
					<button id="btn_search" class="btn btn-warning" type="button"> <i style="font-size: 20px;" class="fa fa-search"></i> </button>
					</div>	
			</div>
			<div id="div2">
				<div id="div_list">
					<ul>
						<li><a href="..\public\trangcanhan.html"><img src="..\image\avata.jpg" style="border-radius: 50%;width: 44px;height: 44px;"> Tùng</a></li>
						<li><a href="..\public\home.html"><i style="width: 40px;height: 40px;font-size: 30px;margin-top: 5px;" class="fa fa-home"></i></a></li>
						<li><a href="#news"><i style="width: 40px;height: 40px;font-size: 28px;margin-top: 5px;" class="fa fa-envelope"></i></a></li>
						<li><a href="#news"><i style="width: 40px;height: 40px;font-size: 28px;margin-top: 5px;" class="fa fa-bell"></i></a></li>
					</ul>		
				</div>
			</div>
			<div id="div_dropdown" class="dropdown">
                <i onclick="myFunction()" id="menu1" class="fa fa-reorder dropbtn"></i> 
				<div id="myDropdown" class="dropdown-content">
					<a href="..\public\trangcanhan.html"><img src="..\image\avata.jpg" 
						style="border-radius: 50%;width: 35px;height: 35px;">
						<strong style="margin-left: 1em">Đoàn Tùng</strong>
					</a>
					<a href="#contact">
						<img style="width: 25px;height: 25px;" src="..\image\icon_facebook.png">
						<label style="margin-left: 1em">Facebook</label>
					</a>
					<a href="#contact">
						<img style="width: 25px;height: 25px;" src="..\image\icon_google.png">
						<label style="margin-left: 1em">Google</label>
					</a>
					<a href="#contact">
						<img style="width: 25px;height: 25px;" src="..\image\Instagram_icon.png">
						<label style="margin-left: 1em">Instagram</label>
					</a>
					<a href="#contact">
						<i class="fa fa-gear" style="font-size:25px;"></i>
						<label style="margin-left: 1.3em">Cài đặt</label>
					</a>
				</div>
			</div>		
		</div>
	</header>
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
					<img id="div_avata_trangthai" src="..\image\avata.jpg">
				</div>
				<div id="div_trangthai_note">
					<div class="container">
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
</html>