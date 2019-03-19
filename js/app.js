$(document).ready(function(){
	$(".ajaxList").change(function(e){
		var select = $(this);
		var idModele = "#"+select.data("target");
		$.get(select.data("url"), {marque:select.val()}, function(data){

		}, 'json');
	})
})