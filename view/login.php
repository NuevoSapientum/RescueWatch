<?php
    session_start();

    if($_SESSION['user']){
        header("Location: http://localhost/RescueWatch/view/home.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../res/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../res/css/main.css">
	<script type="text/javascript" src="../res/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../res/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../res/js/rescuewatch.js"></script>
</head>
<body class="login-form">
	<div class="container">
		 <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <div class="alert alert-danger" role="alert" id="login-error"></div>
            <form class="form-signin" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="inputUsername" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="inputPassword" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <!-- <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Open Login Modal</a></p> -->
                <button class="btn btn-primary" id="button1" type="submit">Sign in</button>
                <a href="#" class="text-center new-account pull-left" role="button" data-toggle="modal" data-target="#login-modal">Create an account </a>
            </form><!-- /form -->
            <a href="#" class="forgot-password pull-right">
                Forgot the password?
            </a>
            <span class="clearfix"></span>
        </div><!-- /card-container -->
	</div>


<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" >
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
		                	<input type="text" class="form-control" name="first_name" id="login_firstname" required placeholder="First Name">
		                	<input type="text" name="last_name" class="form-control" id="login_lastname" required placeholder="Last Name">
				    		<input id="login_username" class="form-control" type="text" placeholder="Username" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Password" required>
				    		<input id="login_confirmpassword" class="form-control" type="password" placeholder="Confirm Password" required>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                                <br/>
                            </div>
				        </div>
                    </form>
                    
                    <!-- End # Login Form -->
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
</body>
</html>