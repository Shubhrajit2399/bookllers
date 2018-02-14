
<?php
include("database_con.php");
session_start();
$fname=$_GET["firstname"];
$lname=$_GET["lastname"];
$yr=$_GET["year"];
$brnc=$_GET["branch"];

$cntct= $_GET["contact_no"];
$whtsap=$_GET["whatsapp_no"];
$pswd=$_GET["Password"];
$msg="";
$correct="";
if(!empty($fname) && !empty($lname) && !empty($yr) && !empty($brnc) && !empty($cntct) && !empty($whtsap) && !empty($pswd))
{
if(!preg_match("/^[6-9]{1}[0-9]{9}+$/",$cntct) || !preg_match("/^[6-9]{1}[0-9]{9}+$/",$whtsap))
{
      $correct="<h3 style='color:Red; '>Warning: You have Entered Wrong Number!!</h3>";
      header("location:create_bookllers.php?warning=".$correct);
}	
else{
	
	$s="insert into bookllers(firstname,lastname,current_year,branch,contact_no,whatsapp_no,passwrd) values('$fname','$lname','$yr','$brnc','$cntct','$whtsap',SHA1('$pswd'))";

	$i=mysqli_query($con,$s);
	if($i>0)
	{
   		$r="select max(id) as id from bookllers";
   		$result=mysqli_query($con,$r);
   		$row=mysqli_fetch_assoc($result);
   		$uid=$row["id"];
   		$_SESSION["ss_id"]=$uid;
   		$_SESSION["ss_fname"]=$fname;
   		$_SESSION["ss_lname"]=$lname;
   		echo "<script>alert('Registered successfully. Have a nice journey. Your Serial No.:$uid');window.location='bookllers_show.php';</script>";
	}
 }
}
else
{
	$msg="<h3 style='color:Red; '>Warning: All fields are must be filled!!</h3>";
	header("location:create_bookllers.php?warn=".$msg);
}	
?>
