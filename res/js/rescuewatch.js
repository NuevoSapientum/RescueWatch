$(document).ready(function(){
	// var sessName = "<?php echo $_SESSION['user'] ?>";

	// alert(sessName);

	$('.form-signin').submit(function(e){
		e.preventDefault();
		var formSignin = $('.form-signin').serializeArray();
		ajax_route("lu", formSignin);
	});

	function ajax_route(action_requested, formValues){ 
	    $.post("../controller/LoginController.php", {action : action_requested, formData : formValues}, function(data){
	    	if(data === "true"){
	    		window.location.replace("http://localhost/RescueWatch/view/home.php");
	    	}else{
	    		$('#login-error').css("display", "block").append("Username or password does not match.");
	    	}
	    })
	}

});