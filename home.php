<?php

session_start();
include_once("connect.php");

if(!isset($_SESSION["username"])){
	header('Location: login.php');
	exit();
}

$_SESSION['message']="";

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Home | Scheduler</title>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<style type="text/css">
		
		html,body{
			margin: 0;
			padding: 0;
			background: white;
		}

		.title{
			text-align: center;
			color: black;
			font-family: 'Times New Roman';
			letter-spacing: 0.1em;
			font-size: 4em;
			padding: 5px;
		}

		.tagline{
			text-align: center;
			color: red;
			letter-spacing: 0.2em;
			font-size: 2em;
			padding: 5px;
			margin-bottom: 10%;
		}

		#appButtonContainer{
			display: inline-block;
			background: #111111;
			color: orange;
			font-size: 2.5em;
			padding: 1.1%;
			margin: 2%;
			margin-left: 30%;
			min-width: 15%;
			cursor: pointer;
		}

		#appButtonContainer:hover{
			transform: scale(1.2);
		}


		#logoutButtonContainer{
			display: inline-block;
			background: #111111;
			color: orange;
			font-size: 2.5em;
			padding: 1.2%;
			margin: 2%;
			margin-left: 7%;
			min-width: 7%;
			cursor: pointer;
		}

		#logoutButtonContainer:hover{
			transform: scale(1.2);
		}

		.sessionDisplay{
			color: orange;
			font-family: 'Comic Sans MS';
			letter-spacing: 0.2em;
			font-size: 1.2em;
			margin-left: 74vw;
			margin-top: 11vh;
		}

		.userDisplay{
			margin-bottom: 3%;
            color: black; 
		}

	</style>
</head>
<body>
	<a onclick="home()"><h1 class="title">My Calendar</h1></a>
	<div class="tagline">Web app to create and manage Appointments</div>
	<span id="appButtonContainer"><a onclick="appointments()">Appointments</a></span>
	<span id="logoutButtonContainer"><a onclick="logout()">Logout</a></span>	
	<div class="sessionDisplay">
		<div class="userDisplay"><?php echo "User : ".$_SESSION["username"]; ?></div>
		<div style="color: black;"><?php echo "E-Mail : ".$_SESSION["email"]; ?></div>
	</div>
<script src="functions.js"></script>
</body>
</html>
