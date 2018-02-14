<?php
//session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Bookllers!</title>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<style>
		body{
			max-width: 100%;
			height: 620px;
			background-image: url("ws_Abstract_city_1280x800.jpg");
			background-size: 100% 100%;
		}
		.d1{
            font-family:'Aclonica' ;
            font-size: 70px;
            margin-top: 4%;
            color: white;   
		}
		.d2{
			font-family: 'Aclonica';
			font-size: 45px;
			margin-top: 1%;
			color: Crimson;
		}
	</style>
</head>
<body>

 <div class="d1"><center>Login</center></div>
 
<form name="bookllers_login" id="bookllers_login" action="bookllers_loginprocess.php" method="POST">
<div class="d2"><center>Whatsapp No:<br>
<input type="text" name="whtsap"><br>
Password:<br>
 		<input type="Password" name="Password"><br>
 		You Are Not Robot:<br>
 		<input type="text" name="captcha"><br><br>
 		<img src="bookllers_captcha.php" width="95" height="50"><br>
 		<input type="submit" name="Submit" value="Submit">
 </center>
 </div>
 	</form>

</body>
</html>