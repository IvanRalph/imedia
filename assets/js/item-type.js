$(document).ready(function(){
	$("#item-type").change(function(){
		var item_type = $("#item-type").val();
		if(item_type == "camera"){
			$("#form-camera").css('display', 'block');
		} else if(item_type == "none"){
			$("form").css('display','none');
		}
	});
});