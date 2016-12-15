$(document).ready(function(){
	$('form').trigger("reset");
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
		var category = $("#item-type").val();
		var formId = $("#item-type").attr('id');
		var formName = capitalizeFirstLetter(category);
		// var formCamera = "category="+ category +"&brand=" + cameraBrand + "&model=" + cameraModel + "&type=" + cameraType + "&cType=" + cameraCType + "&poe=" + cameraPOE + "&specs=" + cameraSpecs + "&lens=" + cameraLens + "&price=" + cameraPrice;
		
		var params = $('#form'+formName).serialize();
		params += '&category=' + category + '&image=' + $("#form"+ formName +" input[name=image]").val();

		console.log(params);
		console.log(formName);

		switch(category){
			case "camera":
				addItem(params);
				break;
			case "recorder":
				addItem(params);
				break;
			case "accessories":
				addItem(params);
				break;
			case "cable":
				addItem(params);
				break;
			case "switch":
				addItem(params);
				break;
			case "wireless":
				addItem(params);
				break;
			case "router":
				addItem(params);
				break;
			case "power":
				addItem(params);
				break;
			default:
				alert("Please select item type before adding...");
				break;
		}

		var currentTab = $('.nav-tabs .active').text();
		var tab = currentTab.toLowerCase();

		function addItem(params){
			$.ajax({
				url: "php/add-item.php",
				type: "post",
				data: params,
				success: function(data, result){
					if(result == "success"){
						$('form').trigger("reset");
						$("#myModal").modal('hide');
						alert("Item added successfully, please refresh page to see result..");
					}
				}, error: function(jqXHR, error){
					console.log(params);
					console.log("Error");
					console.log("Status: " + jqXHR.status);
					console.log(error);
				}
			});
		}

		function capitalizeFirstLetter(string) {
		    return string.charAt(0).toUpperCase() + string.slice(1);
		}
	});
});