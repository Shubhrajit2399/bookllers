<?php
include("database_con.php");
session_start();
$fnm=$_GET["frstname"];
$lnm=$_GET["lstname"];
$cntct=$_GET["cntact_no"];
$addr=$_GET["addrs"];
$usr=$_GET["usrname"];
$pswd=$_GET["Password"];
$msg="";
$verify="";
if(!empty($fnm) && !empty($lnm) && !empty($cntct) && !empty($addr) && !empty($usr) && !empty($pswd))
{
if(!preg_match("/^[6-9]{1}[0-9]{9}+$/",$cntct))
{
     $verify="<h3 style='color:Red; '>Warning: You have Entered Wrong Contact No.!!</h3>";
     header("location:bookllers_buyaccount1.php?var=".$verify);
}
else
{
   
   $b="insert into buy_account(fname,lname,cntct,address,usrname,passwrd) values('$fnm','$lnm','$cntct','$addr','$usr',SHA1('$pswd'))";
   $k=mysqli_query($con,$b);
   if($k>0)
   {
      $r="select max(buy_id) as id from buy_account";
      $result=mysqli_query($con,$r);
      $row=mysqli_fetch_assoc($result);
      $buyid=$row["id"];
      $_SESSION["ss_id"]=$buyid;
      $_SESSION["ss_fname"]=$fnm;
      $_SESSION["ss_lname"]=$lnm;
      $_SESSION["ss_usr"]=$usr;
      $_SESSION["ss_pswd"]=$pswd;
      echo "<script>alert('Account Created. Start Shopping. Your Serial No.:$buyid');window.location='bookllers_show.php';</script>";
   }
  } 
}
else
{
   $msg="<h3 style='color:Red; '>Warning: All fields are must be filled!!</h3>";
   header("location:bookllers_buyaccount1.php?warn2=".$msg);
}  
?>