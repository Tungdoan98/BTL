<div id="button1" class="div_trangthai_upload">
	<img style="width: 30px;height: 25px;" 
		src="..\image\icon_image2.png" id="_avatar1">
	<strong style="margin-top: 10px;">Ảnh</strong>
</div>
<input style="display: none;" id="button2" type="file" name="photo1">
<script>
$('#button2').on('change', function () {
    var fileReader = new FileReader();
    fileReader.onload = function () {
      var data = fileReader.result;  
      document.getElementById('_avatar1').setAttribute('src',data);
    };
    fileReader.readAsDataURL($('#button2').prop('files')[0]);
});
</script>