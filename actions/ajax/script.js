$(document).ready(function(){

$('#myForm').change(function(){
$.ajax({
type: "POST",
url: "handler.php",
data: {pole: $("#pole").val(),
search: $("#search").val()},
success: function(html){
$("#content").html(html);
}
});
return false;
});

});