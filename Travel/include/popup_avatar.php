<div id="modal-wrapper" class="modal">
    <form action="upload_avatar.php" method="post" enctype="multipart/form-data" class="modal-content animate">  
        <div class="imgcontainer">
             <span style="color: red;" onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close">&times;</span>
             <img src="..\public\upload\avatar.png" alt="Avatar" id="_avatar" class="avatar">
             <h1 style="text-align:center">Avatar</h1>
        </div>
        <div class="container">
             <input style="margin: 26px;" type="file" name="photo" 
             id="fileSelect"> 
             <button style="width: 455px;margin-left: 26px;" class="btn btn-success" type="submit" name="submit_avatar">upload</button>
        </div>
    </form>
</div>
<script>
var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
$('#fileSelect').on('change', function () {
    var fileReader = new FileReader();
    fileReader.onload = function () {
      var data = fileReader.result;  
      document.getElementById('_avatar').setAttribute('src',data);
    };
    fileReader.readAsDataURL($('#fileSelect').prop('files')[0]);
});
</script>
