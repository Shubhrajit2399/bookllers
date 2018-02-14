<?php
include("database_con.php");
session_start();

if(!isset($_SESSION["ss_id"]))
	header("Location:bookllers_show.php");

//$sid=$_SESSION["sid"];
$bid=$_SESSION["ss_bid"];
$uid=$_SESSION["ss_id"];

//$fname=$_SESSION["ss_fnam"];
$prc=$_POST["price"];

$qnty=$_POST["quantity"];






if(($_POST["Submit"])){
	
	$u="update bookllers_book set price='$prc', quantity='$qnty' where id='$bid'";
    $i=mysqli_query($con,$u);
   echo "<script>alert('Book Updated successfully.');window.location='bookllers_logout.php';</script>";
}
/*else{
	echo "<center><h1 style='margin-top: 20px; color: DarkOrange;'>Your file size should be less than 400KB and .jpg, .jpeg type</h1></center> <br><br>";
	echo "<center><h1 style='margin-top: 30px;color: LightSeaGreen; text-decoration: none;'><a href='bookllersbookinput.php'>Go Back</h1></center></a>";
}*/

?>