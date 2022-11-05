// Disabling update button
document.querySelector('#update_user_btn').disabled = true;
document.querySelector('#delete_user_btn').disabled = true;

function names_printing() {
	$.ajax({
		type: 'POST',
		url: './names_print.php',
		data: {},
		success: function(response) {
			$("#name-display-div").html(response);
		}
	})
}


function all_data_printing() {
	$.ajax({
		type: 'POST',
		url: './all_data_print.php',
		data: {user_id: user_id},
		success: function(response) {
			$("#complete_data").html(response);
		}
	})
}


function delete_data() {
	user_id = $("#user-id-store").val();
	user_name = $("#user-name-store").val();

	$.ajax({
		type: 'POST',
		url: './delete.php',
		data: {user_id: user_id, user_name: user_name},
        success: function(response) {
            $("#toast-div").append(response);
            names_printing();
        }
	})
}



function save_data() {
	var name = $('#name').val();
	var home = $('#home').val();
	var phone = $('#phone').val();
	var email = $('#email').val();

	$.ajax({
		type: 'POST',
		url: './save_data.php',
		data: {name: name, home: home, phone: phone, email: email},
		success: function(response) {
			$("#toast-div").append(response);
			names_printing(); 
		}
	})      
}


function search_name(search) {
	$.ajax({
        type: 'POST',
        url: './search.php',
        data: {search: search},
        success: function(response) {
        	$("#name-display-div").html(response) 
        }
	})
}

function search_user_displaying(search) {
	$.ajax({
		type: 'POST',
		url: './search_user_displaying.php',
		data: {search: search},
		success: function(response) {
			$("#complete_data").html(response) 
		}
	})
}

function upate_data_filling_form() {
	$.ajax({
	    type: 'POST',
        url: './update_filling_form.php',
        data: {user_id: user_id},
        success: function(response) {
        	$("#update_form2").html(response);
        }
	})
}

function upate_data() {
	var user_id = $("#user-id-store").val();
	var name =  $("#update_name").val();
	var home = $("#update_home").val();
	var phone = $("#update_phone").val();
	var email = $("#update_email").val();

    $.ajax({
    	type: 'POST',
        url: './update.php',
        data: {user_id: user_id, name:name, home: home, phone:phone, email: email},
        success: function(response) {
        	$("#toast-div").append(response);
            names_printing();
        }
    })
}

names_printing();

// full detail of user 

$("#name-display-div").on('click','.display_name', (e)=>{
	document.querySelector('#update_user_btn').disabled = false;
	document.querySelector('#delete_user_btn').disabled = false;
	$("#complete_data").show();
	$("#save_form").hide();
	$("#update_form").hide();
	$("#delete_confirmation_form").hide();
	user_id = e.target.getAttribute("u_id");
	all_data_printing();

});

// deleting data

$("#yes-button").click(function(){
	delete_data();
});

// searching datas

$("#inner-search-btn").click(function() {
	searchs = $("#inner-search-bar").val();
	search_name(searchs);
	search_user_displaying(searchs);
});

$("#home-search-btn").click(function(){
	alert("dd")
	search_value = $("#home-search-bar").val();
	search_name(search_value);
});

$("#home-search-btn").click(function(){
    console.log("Ff");
    alert("ddl");
});



// UPDATE

// form filling

$("#update_user_btn").click(function() {
	$("#update_form2").show();
	upate_data_filling_form();
})

// updating data


$('#update_form').on('click','#update_btn',(e)=>{
	alert("user updated")
	new_id = $('#edit_id').val();
	upate_data();
});

// saving data

$("#save_btn").click(function(){
	$("#name").html("");
	$("#phone").html("");
	$("#email").html("");
	$("#save_form").hide();

	var name = $('#name').val();
	var home = $('#home').val();
	var phone = $('#phone').val();
	var email = $('#email').val();
	

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
					
					save_data();

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

// forms hiding and showing in button clicks

$("#add_user_btn").click(function(){
	$("#save_form").show();
	$("#update_form").hide();
	$("#complete_data").hide();
});
$("#update_user_btn").click(function(){
	$("#update_form").show();
	$("#save_form").hide();
	$("#complete_data").hide();

});
$("#delete_user_btn").click(function(){
	document.querySelector('#update_user_btn').disabled = true;
	document.querySelector('#add_user_btn').disabled = true;
	document.querySelector('.display_name').disabled = true;
	$("#delete_confirmation_form").show();
	$("#save_form").hide();
	$("#update_form").hide();
	$("#complete_data").hide();

});
$("#inner_home_btn").click(function(){
	$("#save_form").hide();
	$("#update_form").hide();
	$("#complete_data").hide();
});
$("#yes-button").click(function(){
	$("#delete_confirmation_form").hide();
	document.querySelector('#update_user_btn').disabled = false;
	document.querySelector('#add_user_btn').disabled = false;
	document.querySelector('.display_name').disabled = false;
})
$("#no-button").click(function(){
	$("#delete_confirmation_form").hide();
	$("#complete_data").show();
	document.querySelector('#update_user_btn').disabled = false;
	document.querySelector('#add_user_btn').disabled = false;
	document.querySelector('.display_name').disabled = false;
})


$("#user-details-display-div").on('click','#close', (e)=>{
	alert("close the file success");
});
