<?php 
	session_start();

	if(!$_SESSION['user']){
		header("Location: http://localhost/RescueWatch/view/login.html");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../res/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../res/css/main.css">
	<script type="text/javascript" src="../res/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../res/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../res/js/rescuewatch.js"></script>
</head>
<body>
	<div class="container">
		<h1>Digos Rescue Watch</h1>
	</div>
</body>
</html>