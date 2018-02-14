<?php
include("database_con.php");
session_start();

$usr=$_POST["username"];
$pswd=$_POST["Password"];

$s="select id,name from log_in1 where password= '$pswd' and username='$usr'";
$i=mysqli_query($con,$s);
if($row=mysqli_fetch_assoc($i)){
	$_SESSION["ss_id"]=$row["id"];
	$_SESSION["ss_nm"]=$row["name"];

	echo "<script>window.location='booksellchck.php'</script>";
}
else{
	echo("No such user");
}
?>