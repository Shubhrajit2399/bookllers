<?php
session_start();
if(isset($_REQUEST["t1"]))
{$bid=$_REQUEST["t1"];

//$usr=$_SESSION["ssuid"];
}

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
 
<form name="bookllersedit" id="bookllersedit" action="bookeditprocess1.php" method="POST">
<div class="d2"><center>Whatsapp No:<br>
<input type="text" name="whtsap"><br>
Password:<br>
 		<input type="Password" name="Password"><br>
 		You Are Not Robot:<br>
 		<input type="text" name="captcha"><br><br>
 		<img src="bookllers_captcha.php" width="95" height="50"><br>
 		<input type="submit" name="Submit" value="Submit">
 		<input type="hidden" name="hbookid" value="<?php echo $bid; ?>">
 </center>
 <?php
  $_SESSION["ss_bid"]=$bid;
  //$_SESSION["ss_usr"]=$usr;
 ?>
 </div>
 	</form>

</body>
</html>