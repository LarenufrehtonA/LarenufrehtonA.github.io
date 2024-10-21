$(function(){
$("#map svg path").click(function() {

var sehir=$(this).attr("id");

$.post("sehir-veri.php",{"sehir-ismi":sehir},function(veriler){ $("#istatislik").html(veriler); })

$("#istatislik").show(1000);

});
})