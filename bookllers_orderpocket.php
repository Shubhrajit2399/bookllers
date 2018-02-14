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
	<title>Orders of your books</title>
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
   <h1 style="margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px;">Hello <?php echo $fnam." ".$lnam ;?>!</h1>&nbsp;&nbsp;<a href="bookllers_loginprocess2.php" style="text-decoration: none;padding-left: 2%;margin-left: 5px;"><button class="button button1" style="color: DimGray;background-color: LawnGreen;">Log Out</button></a>
   
   <hr style="color: LawnGreen;"><br><hr style="color: LawnGreen;"><br>

   <h1 style="padding-left: 2%;margin-left: 5px;margin-right: 5px;">Your Customer Details:-</h1><br>
   <?php
   
   $order="select buy_account.fname as frstnm, buy_account.lname as lstnm, buy_account.cntct as phn, buy_account.address as adrs, bookllers_orderdetails.order_id as orderno, bookllers_orderdetails.book_nmae as bknm, bookllers_orderdetails.author as athr, bookllers_orderdetails.price prc, bookllers_orderdetails.image as pic, bookllers_orderdetails.sell_status as ordr from bookllers_orderdetails, buy_account where bookllers_orderdetails.buyer_id=buy_account.buy_id and bookllers_orderdetails.seller_id='$sellerid' order by bookllers_orderdetails.order_id desc";

   
   $result=mysqli_query($con,$order) ;
  
        
       while($row=mysqli_fetch_assoc($result)){
          
             
   ?>
   <div class="h2">
   	<?php
          
          echo "<b>Order No:</b>".$row["orderno"]."<br>";
   	    echo "<b>Customer Name:</b> ".$row["frstnm"]." ".$row["lstnm"]."<br>";
   	    echo "<b>Contact No:</b> ".$row["phn"]."<br>";
   	    echo "<b>Address:</b> ".$row["adrs"]."<br>";
   	    echo "<b>Book Name:</b> ".$row["bknm"]."<br>";
   	    echo "<b>Price:</b> ".$row["prc"]."<br>";
          
   	?>
   	<b>Book Image:</b> <br><img src="<?php echo $row["pic"]; ?>" width="80" height="100"><br>
     
      <a style="text-decoration: none;" href="bookllers_orderdeliver.php?ordrid=<?php echo $row['orderno'];?>">
     <button class="button button" style="color: DimGray;background-color: LawnGreen;"><b>Delivery Done</b></button></a> <br> 
   <?php
   
          echo "<b style='color:LightCoral;'>".$row["ordr"]."</b><br>";
       
     ?>
      <hr style="color: LawnGreen;">   

      <?php
         
          
       }
   ?>
   </div>  
   
</body>
</html>