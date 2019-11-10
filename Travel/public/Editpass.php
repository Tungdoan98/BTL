<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="..\css\menu.css">
	<link rel="stylesheet" type="text/css" href="..\css\popup1.css">
	<link rel="stylesheet" type="text/css" href="..\css\trangcanhan.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body style="margin: 0">
	<?php 
	require_once '../lib/connectdb.php';
	require '../lib/service.php';
	$img = getImageAvatar();
	?>
	<div id="div_khung_trang_ca_nhan">
		<div class="div_bai_dang">
			<button style="float: right;background-color: red;font-size: 15px;padding: 0 5px 0 5px;">
				<a style="text-decoration: none;color: white;" href="http://localhost:81/cntt3/Travel/public/trangcanhan.php">X</a>
			</button>
			<div style="text-align: center;" class="div_group2">
				<img style="border-radius:50%;border-style: solid;border-color: white;width: 8em;height: 8em;" 
				src="..\public\upload\<?=$img ?>">
				<p style="font-size: 25px;color: black">
					<?php 
					echo $_SESSION['name'][1];
					?>
				</p>
			</div>	
			<div  class="div_group2">
				<table style="margin-left: 4em;">
					<tr><th></th><th></th></tr>
					<tr>
						<td><label style="margin-top: 15px;">Mật khẩu hiện tại : </label></td>
						<td><input class="class_border_radius_5px" type="password" id="txtpass1" size="46" placeholder="Mật khẩu hiện tại " required><br></td>
					</tr>
					<tr>
						<td><label style="margin-top: 15px;">Mật khẩu mới :</label></td>
						<td><input class="class_border_radius_5px" type="password" id="txtnewpass" size="46" placeholder="Mật khẩu mới " required></td>
					</tr>
					<tr>
						<td><label style=" margin-top: 15px;">Nhập lại mật khẩu mới :</label></td>
						<td><input class="class_border_radius_5px" type="password" id="txtpassword" size="46" placeholder="Mật khẩu mới " required></td>
					</tr>
					<tr>
						<td></td>
						<td><button onclick="functionpass()" style="padding: 2px;width: 100px;" type="button" class="btn btn-primary">Thay đổi mật khẩu</button></td>
					</tr>
					<tr>
						<td><label style="margin-top: 15px;">Họ :</label></td>
						<td><input class="class_border_radius_5px" type="text" id="txtHo" size="46" placeholder="Họ " required><br></td>
					</tr>
					<tr>
						<td><label style="margin-top: 15px;">Tên :</label></td>
						<td><input class="class_border_radius_5px" type="text" id="txtTen" size="46" placeholder="Tên " required><br></td>
					</tr>
					<tr>
						<td></td>
						<td><button onclick="functionName()" style="padding: 2px;width: 100px; margin-bottom: 5px;" type="button" class="btn btn-primary">Thay đổi Tên</button></td>
					</tr>
				</table>			
			</div>
			<br>
		</div>
	</div>	
</div>
</div>
<script type="text/javascript">
		function functionpass(){
    	var txtpass  = $('#txtpass1').val();
    	var txtnewpass  = $('#txtnewpass').val();
    	var txtpassword  = $('#txtpassword').val();
    	if(txtnewpass != '' && txtpass != '' && txtpassword !=''  ){
    		if(txtnewpass == txtpassword){
	    		$.ajax({
	    		type:'POST',
	    		url:'Editpass1.php',
	    		data:{
	    			txtpass: txtpass,
	    			txtnewpass: txtnewpass
	    		},
	    		success: function (res) {   
	    			if (res == '1') {
	    				alert("Đổi mật khẩu thành công");
	    			    window.location="http://localhost:81/cntt3/Travel/public/trangcanhan.php";
	    			}
	    			else{
	    				alert(res);
	    			}
	    			}
		    	});
	    	}
	    	else{
	    		alert("Mật khẩu mới không khớp");
	    	}
    	}
    	else{
    		alert("Nhập đầy đủ thông tin mật khẩu !");
    	}	
    }
    function functionName(){
    	var txtHo  = $('#txtHo').val();
    	var txtTen  = $('#txtTen').val();
    	if(txtHo != '' && txtTen != ''){
    		$.ajax({
	    		type:'POST',
	    		url:'EditName.php',
	    		data:{
	    			txtHo: txtHo,
	    			txtTen: txtTen
	    		},
	    		success: function (res) {   
	    			if (res == '1') {
	    				alert("Đổi Tên Thành Công !");
	    			    window.location="http://localhost:81/cntt3/Travel/public/trangcanhan.php";
	    			}
	    			else{
	    				alert(res);
	    			}
	    			}
		    	});
    	}
    	else{
    		alert("Nhập đầy đủ thông tin mật khẩu !");
    	}	
    }
	</script>
</body>
</html>