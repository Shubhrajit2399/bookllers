<?php
include("database_con.php");
// session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
	<style>
		body{
			max-width: 100%;
			height: 600px;
			background-image: url("1.jpg");
			background-size: 100% 100%;
		}
		.h1{
			background-color: Aquamarine ;
			color: white;
			margin-top: 0px;
			padding-left: 2%;
			padding-bottom: 1%;
			margin-left: 5px;
			margin-right: 5px;
			font-family: 'Acme';
			font-size: 50px;
		}
		.h2{
			margin-top: 2px;
			padding-left: 2px;
			padding-bottom: 1px;
			margin-left: 5px;
			margin-right: 5px;
			font-family: 'Acme';
			font-size: 20px;
		}
		.button{
			font-size: 20px;
		}
		.button1{width: 300px;
		         height: 50px;
		         padding-bottom: 2px;
		         max-width: 90%;
		     }
		.button2{width: 300px;
		         height: 50px;
		         padding-bottom: 2px;
		         max-width: 90%;
		     }
	</style>
</head>
<body oncontextmenu="return false;">


  <div class="h1">Sellers Account :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a style="text-decoration: none;" href="create_bookllers.php"><button class="button button1">Create</button></a>&nbsp;&nbsp;&nbsp;

 <a style="text-decoration: none;" href="bookllers_login.php"><button class="button button2">Login</button></a>
  </div><hr>
  <br>
  <a href="bookllers_start.php" style="text-decoration: none;"><h2 style="padding-left: 20px;color: MediumBlue ;"><i class="material-icons" style="font-size:36px;">home</i>Home</h2></a>
  <hr>
  <br>
  <h2 style="color: DarkMagenta;"><center>Book-List</center></h2>
  <hr>
  	<?php
  	   //$uid=$_SESSION["ss_id"];


  	   
       $s="select  bookllers_book.uid as usr, bookllers_book.id as bid, bookllers.firstname as fnm,bookllers.lastname as lnm,bookllers.branch as brnc,bookllers.contact_no as cntct,bookllers.whatsapp_no as whtsap,bookllers_book.book_name as bnm,bookllers_book.author as athr,bookllers_book.price as prc,bookllers_book.quantity as qunty,bookllers_book.img_path as pth from bookllers,bookllers_book where bookllers.id=bookllers_book.uid order by bookllers_book.id desc";
       $result=mysqli_query($con,$s) ;
       while($row=mysqli_fetch_assoc($result)){
       	?>
       <div class="h2">
       	<?php
      
       	echo "Name: ".$row["fnm"]." ".$row["lnm"]."<br>";
       	echo "Branch: ".$row["brnc"]."<br>";
       	echo "Contact No: ".$row["cntct"]."<br>";
       	
       	echo "Book: ".$row["bnm"]."<br>";
       	echo "Author: ".$row["athr"]."<br>";
       	echo "Price: ".$row["prc"]."<br>";
       	echo "In Stock: ".$row["qunty"]."<br>";
       	?>
        Image: <br><img src="<?php echo $row["pth"]; ?>" width="80" height="100">&nbsp;<a href="<?php echo $row["pth"]; ?>">Download Image</a><br>
        <a href='bookllersedit.php?t1=<?php echo $row["bid"]; ?>'>Update Data</a><br>
        <a style="text-decoration: none;" href='bookllers_buylogin1.php?b1=<?php echo $row["bid"]; ?>'><button class="button button3" style="background-color: LawnGreen;color: white;">Buy</button></a>
        </div>
        <hr>
       	
       	
       	<?php
       //	$_SESSION["ssuid"]=$row["usr"];
      
       }
       
  	?>
  </div>
  

</body>

</html>