<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang cá nhân</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="..\css\menu.css">
	<link rel="stylesheet" type="text/css" href="..\css\popup1.css">
	<link rel="stylesheet" type="text/css" href="..\css\trangcanhan.css">
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
	<section style="padding-top: 4.3em;z-index: 10;">
		<?php  
		include("../include/travel.php");
		?>
		<div  id="div_trang_ca_nhan">
			<div id="div_khung_trang_ca_nhan">
				<div id="div_top">
					<div id="div_anh_bia">
						<i style="position: absolute; top: 5px;padding-top: 4em;padding-left: 1em;font-size: 20px;color:  #C0C0C0" class="fa fa-camera"></i>
						<img style="width: 100%;height: 18em;" src="..\image\anh_bia.png">
					</div>
					<div id="div_anh_dai_dien">
						<div style="float: left;margin-left: 1em;">
							<img style="border-radius:50%;border-style: solid;border-color: white;width: 8em;height: 8em;" 
							src="..\public\upload\<?=$img ?>">
							<i id="id_avatar1" onclick="document.getElementById('modal-wrapper').style.display='block'" class="fa fa-camera"></i>
							<?php  
							include("../include/popup_avatar.php");
							?>	
							<strong style="font-size: 25px;color: black">
								<?php 
								echo $_SESSION['name'][1];
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
								<img id="div_avata_trangthai" src="..\public\upload\<?=$img ?>">
							</div>
							<form  action="" method="POST" role="form" id="form">
								<div style="width: 80%!important;" id="div_trangthai_note">
									<div class="container">
										<div class="form-group">
											<textarea class="form-control" rows="3" cols="80" placeholder="Bạn đang nghĩ gì ?" name="title_comment" id="comment"></textarea>
										</div>
									</div>
									<?php  
									include("../include/loadImage.php");
									?>	
									<div class="div_trangthai_upload" 
									style="width:150px!important ">
									<img style="width: 25px;height: 25px;" 
									src="..\image\icon_cam_xuc5.png">
									<strong style="margin-top: 10px;">Cảm Xúc</strong>
								</div>
								<button id="btn_dang"  name="submit_insert" class="btn btn-primary">
									Đăng
								</button>
							</div>
						</form>			
					</div>
				</div>
				<div id="content" class="div_bai_dang">
					
				</div>
			</div>	
		</div>
	</div> 
</section>
<script type="text/javascript">
	function performClick(elemId) {
		var elem = document.getElementById(elemId);
		if(elem && document.createEvent) {
			var evt = document.createEvent("MouseEvents");
			evt.initEvent("click", true, false);
			elem.dispatchEvent(evt);
		}
	}
</script>
<script>
	var modal = document.getElementById('modal-wrapper');
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>	
<script type="text/javascript">
	$(document).ready(         
		function() {
			$.ajax({
				url : "../login/data.php",
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
	<script>
    //xử lý khi có sự kiện click
    $('#btn_dang').on('click', function () {
    	var comment = $('#comment').val();
    	var file_data = $('#button2').prop('files')[0];
    	if(!file_data){
    		$('#form').submit(function (){
    			return false;
    		});
    		var form_data = new FormData();
    		form_data.append('comment', comment);
    		$.ajax({
    			url: 'save1.php',
    			dataType: 'text',
    			cache: false,
    			contentType: false,
    			processData: false,
    			data: form_data,
    			type: 'post',
    			success: function (res) {
    				$('#form')[0].reset();  
    				$( '#content' ).html('');
    				$( '#content' ).html(res);
    				console.log(res);
    				alert("Data added successfully !");
    			}
    		});
    	}
    	else{
    		var type = file_data.type;
    		var match = ["image/jpg", "image/jpeg", "image/gif","image/png"];
    		if (type == match[0] || type == match[1] || type == match[2] || type == match[3] ) {
            //khởi tạo đối tượng form data
            var form_data = new FormData();
            //thêm files vào trong form data
            form_data.append('file', file_data);
            form_data.append('comment', comment);
            //sử dụng ajax post
            $.ajax({
            	url: 'save.php',
            	dataType: 'text',
            	cache: false,
            	contentType: false,
            	processData: false,
            	data: form_data,
            	type: 'post',
            	success: function (res) {
            		$('#form')[0].reset(); 
            		$('#button2').val(null); 
            		document.getElementById('_avatar1').src="../image/icon_image2.png";
            		$( '#content' ).html('');
            		$( '#content' ).html(res);
            		alert("Data added successfully !");
            	}
            });
        }        
        return false;
    }
});

    function functiondelete(id){
    	var del_id = id;
    	$.ajax({
    		type:'POST',
    		url:'delete.php',
    		data:{del_id:del_id},
    		success: function (res) {   
    			alert(res);
    			location.reload(); 

    		}
    	});
    }
</script>
</body>
</html>