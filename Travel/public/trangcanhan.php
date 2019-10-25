<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang cá nhân</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="..\css\menu.css">
	<link rel="stylesheet" type="text/css" href="..\css\trangcanhan.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<li><a href="..\public\trangcanhan.html"><img src="..\image\avata.jpg" style="border-radius: 50%;width: 44px;height: 44px;"> 
							<?php	
								echo($_SESSION['name']);
							?>
							</a></li>
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
						<strong style="margin-left: 1em">
							<?php 
								echo $_SESSION['name'];
							?>
						</strong>
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
					<?php
						if(isset($_SESSION['name'])){
							echo "<a href='..\login\logout.php?logout'>
						<i class='fa fa-sign-out' style='font-size:20px;'></i>
						<label style='margin-left: 1.3em'>Đăng Xuất</label>
					    </a>";
						}
						else{
							header("location:http://localhost/cntt3/Travel/login/login.php");
						}   
					?>
				</div>
			</div>		
		</div>
	</header>
	<section style="padding-top: 4.3em;z-index: 10;">
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
		<div  id="div_trang_ca_nhan">
			<div id="div_khung_trang_ca_nhan">
				<div id="div_top">
					<div id="div_anh_bia">
						<i style="position: absolute; top: 5px;padding-top: 4em;padding-left: 1em;font-size: 20px;color:  #C0C0C0" class="fa fa-camera"></i>
						<img style="width: 100%;height: 18em;" src="..\image\anh_bia.png">
					</div>
					<div id="div_anh_dai_dien">
						<div style="float: left;margin-left: 1em;">
							<img style="border-radius:50%;border-style: solid;border-color: white;width: 8em;height: 8em;" src="..\image\avata.jpg">
							<strong style="font-size: 25px;color: black">
								<?php 
									echo $_SESSION['name'];
								?>
							</strong>
						</div>		
					</div>
					<div align="center">
						<img style="width: 120px ;height: 60px;" src="..\image\logo.png">
					</div>
				</div>
				<div id="div_main">
					<div id="div_trangthai">
						<strong id="div_top1">Tạo bài viết</strong>
						<div id="div_group1">
							<div id="div_trangthai_avt">
								<img id="div_avata_trangthai" src="..\image\avata.jpg">
							</div>
							<div id="div_trangthai_note">
								<div class="container">
								    <div class="form-group">
								         <textarea class="form-control" rows="3" cols="80" placeholder="Bạn đang nghĩ gì ?" id="comment"></textarea>
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
					<div class="div_bai_dang">
						<div class="div_group2">
							<div id="div_trangthai_avt1">
								<img id="div_avata_trangthai" src="..\image\avata.jpg">
								<strong>Đoàn Tùng</strong>
							</div>
							<div>
								<label>Viết gì cho hợp lý bây giờ</label>
								<img src="..\image\anhtung.jpg" style="width: 100%;max-height: 30em">
								<div class="div_trangthai_like_cmt_share">
									<div class="div_item_trang_thai not_like">
										<i id="item_like"  class="fa fa-thumbs-o-up" style="font-size:20px"></i>
									</div>	
									<div class="div_item_trang_thai">
										<i class="fa fa-comment-o" style="font-size:20px"></i>
									</div>
									<div class="div_item_trang_thai">
										<i class="fa fa-share" style="font-size:20px"></i>
									</div>							
								</div>
								<hr>
								<div class="div_trangthai_avt2">
										
								</div>
								<div>
									<div class="div_trangthai_avt2">
						            	<img style="margin-bottom: 5px;" id="div_avata_trangthai_cmt" src="..\image\avata.jpg">
						            	<input class="class_border_radius_5px" type="text" name="txt_Noidung_cmt" size="50" >
						            	<button style="padding: 2px;margin-bottom: 5px;width: 5em" type="button" class="btn btn-info">Send</button>
									</div>									
								</div>
							</div>
						</div>	
					</div>
				</div>	
			</div>
		</div> 
	</section>	 
</body>
</html>