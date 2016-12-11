$(document).ready(function(){
	$("#item-type").change(function(){
		var item_type = $("#item-type").val();
		if(item_type == "camera"){
			$("#formCamera").css('display', 'block');
			$("form:not(#formCamera)").css('display', 'none');
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
		// var cameraBrand = $("#form-camera input[name=brand]").val();
		// var cameraModel = $("#form-camera input[name=model]").val();
		// var cameraType = $("#form-camera input[name=type]").val();
		// var cameraCType = $("#form-camera input[name=c-type]").val();	
		// var cameraPOE = $("#form-camera input[name=poe]").val();
		// var cameraSpecs = $("#form-camera input[name=specs]").val();
		// var cameraLens = $("#form-camera input[name=lens]").val();
		// var cameraPrice = $("#form-camera input[name=price]").val();

		var category = $("#item-type").val();
		// var formCamera = "category="+ category +"&brand=" + cameraBrand + "&model=" + cameraModel + "&type=" + cameraType + "&cType=" + cameraCType + "&poe=" + cameraPOE + "&specs=" + cameraSpecs + "&lens=" + cameraLens + "&price=" + cameraPrice;
		
		var params = '';

		for( var i = 0; i < document.formCamera.elements.length; i++ ){
			var fieldName = document.formCamera.elements[i].name;
			var fieldValue = document.formCamera.elements[i].value;

			params += fieldName + '=' + fieldValue + '&';
		}

		params += 'category=' + category; 

		if(category == "camera"){
			$.ajax({
				url: "php/add-item.php",
				type: "post",
				data: params,
				success: function(data, result){
					if(result == "success"){
						console.log(data);
					}
				}, error: function(jqXHR, error){
					console.log(params);
					console.log("Error");
					console.log("Status: " + jqXHR.status);
					console.log(error);
				}
			});
		}
	});
});