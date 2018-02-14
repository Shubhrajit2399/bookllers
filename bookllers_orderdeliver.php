<?php
include("database_con.php");
session_start();
	$odr=$_REQUEST["ordrid"];
	

$sel="select buy_account.fname as fnm, buy_account.lname as lnm, buy_account.cntct as phn, buy_account.address as addrs,bookllers_orderdetails.order_id as ordr, bookllers_orderdetails.seller_id as sell, bookllers_orderdetails.book_nmae as bnm, bookllers_orderdetails.price as bprc, bookllers_orderdetails.image as img from buy_account, bookllers_orderdetails where buy_account.buy_id=bookllers_orderdetails.buyer_id and bookllers_orderdetails.order_id='$odr'";
$d=mysqli_query($con,$sel);
if($row=mysqli_fetch_assoc($d)){
   $odr=$row["ordr"];
   $seller=$row["sell"];
   $cfnm=$row["fnm"];
   $clnm=$row["lnm"];
   $cphn=$row["phn"];
   $caddrs=$row["addrs"];
   $bknm=$row["bnm"];
   $bkprc=$row["bprc"];
   $bpth=$row["img"];

$deliver_data="insert into bookllers_deliverdorder(order_id,customer_fnm,customer_lnm,customer_cntct,customer_address,book_name,price,img_path) values('$odr', '$cfnm', '$clnm', '$cphn', '$caddrs', '$bknm', '$bkprc', '$bpth')";
$ustatus="update bookllers_orderdetails set sell_status='Delivered' where order_id='$odr'";
$iqury=mysqli_query($con,$deliver_data);
mysqli_query($con,$ustatus);
echo "<script>alert('Delivery Done!!');window.location='bookllers_orderpocket.php';</script>";

}
?>