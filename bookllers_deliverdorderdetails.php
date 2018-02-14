<?php
include("database_con.php");
session_start();
$sellerid=$_SESSION["ss_id"];

$fnam=$_SESSION["ss_fnm"];
$lnam=$_SESSION["ss_lnm"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delivered</title>
	<style>
		body{
			max-width: 100%;
			height: 600px;
			color: LawnGreen;
			background-color: DimGray; 
			background-size: 100% 100%;
		}
		.h2{
			margin-top: 2px;
			padding-left: 2px;
			padding-bottom: 1px;
			margin-left: 5px;
			margin-right: 5px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1 style="margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px;">Hello <?php echo $fnam." ".$lnam ;?>!</h1>&nbsp;&nbsp;<a href="bookllers_loginprocess2.php" style="text-decoration: none;padding-left: 2%;margin-left: 5px;"><button class="button button1" style="color: DimGray;background-color: LawnGreen;">Log Out</button></a><br>
	<hr style="color: LawnGreen;"><br><hr style="color: LawnGreen;"><br>
	<h1 style="padding-left: 2%;margin-left: 5px;margin-right: 5px;">Delivered Orders:-</h1><br>
	<?php
		
        $deliver="select bookllers_deliverdorder.order_id as odr, bookllers_deliverdorder.customer_fnm as fnm, bookllers_deliverdorder.customer_lnm as lnm, bookllers_deliverdorder.customer_cntct as phn, bookllers_deliverdorder.customer_address as addrs, bookllers_deliverdorder.book_name as bnm, bookllers_deliverdorder.price as prc, bookllers_deliverdorder.img_path as img from bookllers_deliverdorder, bookllers_orderdetails where bookllers_deliverdorder.order_id=bookllers_orderdetails.order_id and bookllers_orderdetails.seller_id='$sellerid'";
        $res=mysqli_query($con,$deliver) ;
       while($row=mysqli_fetch_assoc($res)){
	?>
	<div class="h2">
   	<?php
          echo "<b>Order No:</b>".$row["odr"]."<br>";
   	    echo "<b>Customer Name:</b> ".$row["fnm"]." ".$row["lnm"]."<br>";
   	    echo "<b>Contact No:</b> ".$row["phn"]."<br>";
   	    echo "<b>Address:</b> ".$row["addrs"]."<br>";
   	    echo "<b>Book Name:</b> ".$row["bnm"]."<br>";
   	    echo "<b>Price:</b> ".$row["prc"]."<br>";
   	?>
   	<b>Book Image:</b> <br><img src="<?php echo $row["img"]; ?>" width="80" height="100"><br>
   	<hr style="color: LawnGreen;">
   	</div>  
   <?php  	
       }
   ?>
</body>
</html>