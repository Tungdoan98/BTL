<?php 
	function printUser($stt,$id,$email,$hoten,$ngaysinh,$gioitinh) {
		echo ("<tr><td>".$stt."</td><td>".$email."</td><td>".$hoten."</td><td>".$ngaysinh."</td><td>".$gioitinh."</td><td class='text-right'><button style='padding:3px' type='button' class='btn btn-danger'onclick='functionDL(".$id.")' >Delete</button></td></tr>");                   
	}
?>
