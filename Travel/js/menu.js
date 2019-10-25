function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
$(document).ready(function(){
  $("#button1").click(function(){
  $("#button2").click();
  });
})

$(document).on("click", ".not_like", function(){
  $(this).find("#item_like").css("color","#1874CD");
  $(this).addClass("liked");
  $(this).removeClass("not_like");
});

$(document).on("click", ".liked", function(){
  $(this).find("#item_like").css("color","black");
  $(this).removeClass("liked");
  $(this).addClass("not_like");
});
