<?php
include("database_con.php");
//session_start();
//$bookid=$_SESSION["ss_bid"];
$bid=$_REQUEST["hbookid"];
$unm=$_POST["usr"];
$pswd=$_POST["Password"];

$a="select buy_id,fname,lname from buy_account where BINARY usrname=BINARY '$unm' and BINARY passwrd=BINARY SHA1('$pswd')";
$d=mysqli_query($con,$a);
if($row=mysqli_fetch_assoc($d)){
	session_start();
	$bookid=$_SESSION["ss_bid"];
    if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"]){
	$_SESSION["buyerid"]=$row["buy_id"];
	$_SESSION["buyerfnm"]=$row["fname"];
	$_SESSION["buyerlnm"]=$row["lname"];
	echo "<script>window.location='bookllers_confdetails.php?bookid=".$bid."'</script>";
 }
 else{
  	echo "<script>alert('Wrong Verification'),window.location='bookllers_show.php';</script>";
  }
}
else{
	echo "<script>alert('Invalid Input. Please try again.'),window.location='bookllers_show.php';</script>";
}
?>