<?php
session_start();
if (! empty ($_SESSION["ss_fnm"])){
$firstname=$_SESSION["ss_fnm"];
$lastname=$_SESSION["ss_lnm"];
}
else {
	header("location:bookllers_show.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bookllers</title>
	<style>
		body{
			max-width: 100%;
			height: 600px;
			background-color: DimGray; 
			background-size: 100% 100%;
		}
		.h1{
			margin-top: 0px;
			padding-left: 2%;
			padding-bottom: 1%;
			margin-left: 10px;
			margin-right: 5px;
			font-size: 50px;
		}
	</style>
</head>
<body>
   <h1 style="color: LawnGreen;margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px">Hello <?php echo $firstname." ".$lastname ;?>!</h1>
   <a href="bookllers_logout.php" style="text-decoration: none;padding-left: 2%;margin-left: 5px;"><button class="button button1" style="color: DimGray;background-color: LawnGreen;">Log Out</button></a>
   <hr style="color: LawnGreen;"><br><hr style="color: LawnGreen;"><br>
   <div class="h1"><p style="color: LawnGreen;">Menu:-</p>

   	    <a style="text-decoration: none;" href="bookllers_orderpocket.php"><button class="button button1" style="color: DimGray;background-color: LawnGreen; height: 100px; max-width: 80%;width: 600px; font-size: 30px;">Book Orders</button></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
   	    <a style="text-decoration: none;" href="bookllers_deliverdorderdetails.php"><button class="button button1" style="color: DimGray;background-color: LawnGreen; height: 100px; max-width: 80%;width: 600px; font-size: 30px;">Delivered Orders</button></a>
   	    <br><br>
   	    <a style="text-decoration: none;" href="bookllersbookinput.php"><button class="button button1" style="color: DimGray;background-color: LawnGreen; height: 100px; max-width: 80%;width: 600px; font-size: 30px;">Enter New Book</button></a>
   	    
   	    
   </div>
</body>
</html>