<?php 
	function printBV($img,$id,$title,$image,$date,$name) {
		echo("<div class='div_group2'>");
		echo("<div id='div_trangthai_avt1'>");
		echo("<img id='div_avata_trangthai' src='..\public\upload\\".$img."'>");
		echo("<strong>".$name."</strong>");
		echo ("<div class='dropdown1' style='float:right;''>
				<button class='dropbtn1'><i class='fa fa-gear' style='font-size:15px;'></i></button>
				<div class='dropdown-content1'>
				<button id='btn_delete_edit' onclick='functiondelete(".$id.")' class='btn'>Delete</button>
				<button id='btn_delete_edit' class='btn'><a style='padding: 0;text-decoration: none;' href='http://localhost:81/cntt3/Travel/public/edit.php?id= ".$id."'>Edit</a></button>
				</div>
				</div>");
		echo("</div>");
		echo("<div>");
		echo("<label style='margin:5px;' >".$title."</label>");
		if($image !=""){
			echo("<img src='..\public\upload\\".$image."'style='width: 98%;margin-left: 1%;'>");
		}
		echo("<div class='div_trangthai_like_cmt_share'>");
		echo("<div class='div_item_trang_thai not_like'>");
		echo("<i id='item_like'  class='fa fa-thumbs-o-up' style='font-size:20px'></i>");
		echo("</div>");
		echo("<div class='div_item_trang_thai'>");
		echo("<i class='fa fa-comment-o' style='ont-size:20px'></i>");
		echo("</div>");
		echo("<div class='div_item_trang_thai'>");
		echo("<i class='fa fa-share' style='font-size:20px'></i>");
		echo("</div>");
		echo("</div>");
		echo("<hr>");
		echo("<div class='div_trangthai_avt2'>");
		echo("</div>");
		echo("<div>");
		echo("<div class='div_trangthai_avt2'>");
		echo("<img style='margin-bottom: 5px;' 
			id='div_avata_trangthai_cmt' src='..\public\upload\\".$img."'>");
		echo("<input style='border-color: #DDDDDD; border-radius: 4px; width: 25em; border-style: solid;border-width: 1px;' type='text' name='txt_Noidung_cmt' size='50'>");
		echo("<button style='padding: 2px;margin-bottom: 5px;width: 5em;margin: 3px;' type='button' class='btn btn-info'>Send</button>");
		echo("</div></div></div></div>");	
	}
	function printBvBt($img,$title,$image,$name) {
		echo("<div class='div_group2'>");
		echo("<div id='div_trangthai_avt1'>");
		echo("<img id='div_avata_trangthai' src='..\public\upload\\".$img."'>");
		echo("<strong>".$name."</strong>");
		echo("</div>");
		echo("<div>");
		echo("<label style='margin:5px;' >".$title."</label>");
		if($image !=""){
			echo("<img src='..\public\upload\\".$image."'style='width: 98%;margin-left: 1%;'>");
		}
		echo("<div class='div_trangthai_like_cmt_share'>");
		echo("<div class='div_item_trang_thai not_like'>");
		echo("<i id='item_like'  class='fa fa-thumbs-o-up' style='font-size:20px'></i>");
		echo("</div>");
		echo("<div class='div_item_trang_thai'>");
		echo("<i class='fa fa-comment-o' style='ont-size:20px'></i>");
		echo("</div>");
		echo("<div class='div_item_trang_thai'>");
		echo("<i class='fa fa-share' style='font-size:20px'></i>");
		echo("</div>");
		echo("</div>");
		echo("<hr>");
		echo("<div class='div_trangthai_avt2'>");
		echo("</div>");
		echo("<div>");
		echo("<div class='div_trangthai_avt2'>");
		echo("<img style='margin-bottom: 5px;' 
			id='div_avata_trangthai_cmt' src='..\public\upload\\".$img."'>");
		echo("<input style='border-color: #DDDDDD; border-radius: 4px; width: 22em; border-style: solid;border-width: 1px;' type='text' name='txt_Noidung_cmt' size='50'>");
		echo("<button style='padding: 2px;margin-bottom: 5px;width: 5em;margin: 3px;' type='button' class='btn btn-info'>Send</button>");
		echo("</div></div></div></div>");	
	}
?>