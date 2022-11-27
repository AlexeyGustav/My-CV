$("#sendMail").on("click", function() {
var email = $("#email").val();
var name = $("#name").val();
var message = $("message").val();

if(email == "") {
	$("#errorMess").text("Введите email");
	return false;
} else if(name == "") {
	$("#errorMess").text("Введите имя");
	return false;
} else if(message == "") {
	$("#errorMess").text("Введите сообщение");
	return false;
} 

$("#errorMess").text("");

$.ajax({
	url: '/mail.php',
	type: 'POST',
	cache: false,
	data: { 'name': name, 'email': email, 'message': message },
	dataType: 'html', 
	beforeSend: function() {
		$("$sendMail").prop("disabled", true);
	},
	success: function(data) {
		alert(data);
		$("#sendMail").prop("disabled", false);
	}
})

});

