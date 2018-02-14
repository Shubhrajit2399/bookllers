<?php
include("database_con.php");

$whtsap=$_POST["whtsap"];
$pswd=$_POST["Password"];

$s="select id,firstname,lastname from bookllers where BINARY whatsapp_no=BINARY '$whtsap' and BINARY passwrd=BINARY SHA1('$pswd')";
$i=mysqli_query($con,$s);
if($row=mysqli_fetch_assoc($i)){
	session_start();
	if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"]){
	$_SESSION["ss_id"]=$row["id"];
	$_SESSION["ss_fnm"]=$row["firstname"];
	$_SESSION["ss_lnm"]=$row["lastname"];

	echo "<script>window.location='bookllers_loginprocess2.php'</script>";
  }
  else{
  	echo "<script>alert('Wrong Verification'),window.location='bookllers_login.php';</script>";
  }
}
else{
	echo "<script>alert('Invalid Input. Please try again.'),window.location='bookllers_login.php';</script>";
}
?>