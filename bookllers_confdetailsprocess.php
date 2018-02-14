<?php
include("database_con.php");
session_start();
$buyer_id=$_SESSION["buyerid"];
$bkid=$_REQUEST["bkid"];
$sellerid=$_SESSION["seller_id"];
$book_name=$_SESSION["bknm"];
$bauthr=$_SESSION["athr"];
$bkprc=$_SESSION["prc"];
$img_pth=$_SESSION["img"];

$data="insert into bookllers_orderdetails(book_id,seller_id,buyer_id,book_nmae,author,price,image) values('$bkid','$sellerid','$buyer_id','$book_name','$bauthr','$bkprc','$img_pth')";
$udata="update bookllers_book set quantity=quantity-1 where id='$bkid'";
 $iqury=mysqli_query($con,$data);
 mysqli_query($con,$udata);


echo "<script>alert('Order Has Placed successfully. Thank You For Purchasing. Continue Shopping.');window.location='bookllers_logout.php';</script>";
?>