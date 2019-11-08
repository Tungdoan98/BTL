<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="..\css\trangcanhan.css">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<?php 
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	$img = getImageAvatar();
	$id= $_GET['id'];
	$imgBv = getImageBV($id);
	$title = getTitleBV($id);
	?>
	<div id="div_khung_trang_ca_nhan">
		<div class="div_bai_dang">
			<div class="div_group2">
				<div id="div_trangthai_avt1">
					<img id="div_avata_trangthai" src="..\public\upload\<?=$img ?>">
					<strong>
						<?php 
						echo $_SESSION['name'][1];
						?>
					</strong>
				</div>
				<form action="edit.php" method="POST">
					<div>
						<textarea name="comment" class="form-control" rows="1" cols="80" placeholder="Bạn đang nghĩ gì ?" id="comment"><?php echo($title)?></textarea>
						<?php
							if($imgBv !='')
								echo ("<img src='..\public\upload\\".$imgBv."' style='width: 98%;margin-left: 1%;'>");
						?>
						<div class="div_trangthai_like_cmt_share">
							<div style="color: red" class="div_item_trang_thai not_like">
								<a style="text-decoration: none;" href="http://localhost:81/cntt3/Travel/public/trangcanhan.php">Close</a>
							</div>	
							<div style="float: right;margin-right: 5em;" class="div_item_trang_thai">
								<a style="text-decoration: none;color: #007bff;" onclick="functionedit(<?=$id?>)">Edit</a>
							</div>							
						</div>
					</div>		
				</form>	
			</div>	
		</div>
	</div>
	<script type="text/javascript">
		function functionedit(id){
    	var edit_id = id;
    	var title  = $('#comment').val();
    	$.ajax({
    		type:'POST',
    		url:'edit1.php',
    		data:{
    			edit_id: edit_id,
    			title: title
    		},
    		success: function (res) {   
    			alert(res);
    			window.location="http://localhost:81/cntt3/Travel/public/trangcanhan.php";
    		}
    	});
    }
	</script>
</body>
</html>