







// saving data

$("#save_btn").click(function(){
	$("#name").html("");
	$("#phone").html("");
	$("#email").html("");
	$("#save_form").hide();

	var name = $('#name').val();
	var phone = $('#phone').val();
	var email = $('#email').val();
	var home = $('#home').val();

	var ph = phone.length; 


	var phone_length = (10 - ph);

	//form validation

	if(name.length > 0){
		$("#name_label").html("");
		$("#name").css({"border": "1px solid #ced4da"});
		if(home.length > 0){
			$("#home_label").html("");
			$("#home").css({"border": "1px solid #ced4da"});
			if(phone.length == 10){
				$("#phone_label").html("");
				$("#phone").css({"border": "1px solid #ced4da"});
				if(email.length > 0){
					$("#email_label").html("");
					$("#email").css({"border": "1px solid #ced4da"});


				}
				else{
					$("#email_label").html("Plese fill email");
					$("#email").css({"border":"solid red"});
					$("#save_form").show();
				}  
			}
			else{
				$("#phone_label").html("Plese fill " + phone_length + " more digit ");
				$("#phone").css({"border":"solid red"});
				$("#save_form").show();
			}
		}
		else{
			$("#home_label").html("Plese fill home address");
			$("#home").css({"border":"solid red"});
			$("#save_form").show();
		}

	}
	else{
		$("#name_label").html("Plese fill name");
		$("#name").css({"border":"solid red"});
		$("#save_form").show();
	}
})

	// $.ajax({
	// 				type: 'POST',
	// 				url: './save_data.php',
	// 				data: {name:$('#name').val(), phone:$('#phone').val(), email:$('#email').val()},
	// 				success: function(response) {
	// 					list_contacts();
	// 					alert("User Added !");
	// 				}
	// 			});