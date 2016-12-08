$(document).ready(function(){
	$("#item-type").change(function(){
		var item_type = $("#item-type").val();
		if(item_type == "camera"){
			$("#form-camera").css('display', 'block');
			$("form:not(#form-camera)").css('display', 'none');
			$(document).data('form', '#form-camera');
		} else if(item_type == "none"){
			$("form").css('display','none');
		} else if(item_type =="recorder"){
			$("#form-recorder").css('display','block');
			$("form:not(#form-recorder)").css('display', 'none');
		} else if(item_type == "accessories"){
			$("#form-accessories").css('display','block');
			$("form:not(#form-accessories)").css('display', 'none');
		} else if(item_type == "cable"){
			$("#form-cable").css('display','block');
			$("form:not(#form-cable)").css('display', 'none');
		} else if(item_type == "switch"){
			$("#form-switch").css('display','block');
			$("form:not(#form-switch)").css('display', 'none');
		} else if(item_type == "wireless"){
			$("#form-wireless").css('display','block');
			$("form:not(#form-wireless)").css('display', 'none');
		} else if(item_type == "router"){
			$("#form-router").css('display','block');
			$("form:not(#form-router)").css('display', 'none');
		} else if(item_type == "power"){
			$("#form-power").css('display','block');
			$("form:not(#form-power)").css('display', 'none');
		}
	});

	$("#add").click(function(){
		alert("test");
		var form = $(document).data('form');
		alert(form);
		var queryString = $('\''+form+'\'').serializeArray();
		alert(queryString);


	});
});