<?php
include("database_con.php");
//session_start();
//$id=$_SESSION["ss_bid"];
$bid=$_REQUEST["hbookid"];
$whtsap=$_POST["whtsap"];
$pswd=$_POST["Password"];

$s="select id,firstname,lastname from bookllers where BINARY whatsapp_no=BINARY '$whtsap' and BINARY passwrd=BINARY SHA1('$pswd')";
$i=mysqli_query($con,$s);
if($row=mysqli_fetch_assoc($i)){
	session_start();
	$id=$_SESSION["ss_bid"];
	//echo $row["id"];
	if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"]){
	$_SESSION["ss_id"]=$row["id"];
	$_SESSION["ss_fnm"]=$row["firstname"];
	$_SESSION["ss_lnm"]=$row["lastname"];
	echo "<script>window.location='bookeditprocess2.php?bookid=".$bid."'</script>";
  }
  else{
  	echo "<script>alert('Wrong Verification'),window.location='bookllers_show.php';</script>";
  }
}
else{
	echo "<script>alert('Invalid Input. Please try again.');window.location='bookllers_show.php';</script>";
}
?>