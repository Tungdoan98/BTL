function performClick(elemId) {
	var elem = document.getElementById(elemId);
	if(elem && document.createEvent) {
		var evt = document.createEvent("MouseEvents");
		evt.initEvent("click", true, false);
		elem.dispatchEvent(evt);
	}
}
var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
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
