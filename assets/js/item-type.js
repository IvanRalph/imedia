$(document).ready(function(){
	$("#item-type").change(function(){
		$('form').trigger("reset");
		var item_type = $("#item-type").val();
		if(item_type == "camera"){
			$("#formCamera").css('display', 'block');
			$("form:not(#formCamera)").css('display', 'none');
			$(document).data('form', '#form-camera');
		} else if(item_type == "none"){
			$("form").css('display','none');
		} else if(item_type =="recorder"){
			$("#formRecorder").css('display','block');
			$("form:not(#formRecorder)").css('display', 'none');
		} else if(item_type == "accessories"){
			$("#formAccessories").css('display','block');
			$("form:not(#formAccessories)").css('display', 'none');
		} else if(item_type == "cable"){
			$("#formCable").css('display','block');
			$("form:not(#formCable)").css('display', 'none');
		} else if(item_type == "switch"){
			$("#formSwitch").css('display','block');
			$("form:not(#formSwitch)").css('display', 'none');
		} else if(item_type == "wireless"){
			$("#formWireless").css('display','block');
			$("form:not(#formWireless)").css('display', 'none');
		} else if(item_type == "router"){
			$("#formRouter").css('display','block');
			$("form:not(#formRouter)").css('display', 'none');
		} else if(item_type == "power"){
			$("#formPower").css('display','block');
			$("form:not(#formPower)").css('display', 'none');
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
						$('form').trigger("reset");
						alert("Item added successfully");
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