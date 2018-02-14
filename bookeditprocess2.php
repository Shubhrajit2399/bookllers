<?php
include("database_con.php");
session_start();

if (! empty ($_SESSION["ss_fnm"])){
$sellerid=$_SESSION["ss_id"];
$id=$_REQUEST["bookid"];

$fnme=$_SESSION["ss_fnm"];
$lnme=$_SESSION["ss_lnm"];
}
else {
  header("location:bookllers_show.php");
}
$msg1="";
$flag=1;


   
   $s="select bookllers.id as uid,bookllers_book.id as bid,bookllers_book.price as prc,bookllers_book.quantity as qnty from bookllers_book,bookllers where bookllers_book.uid=bookllers.id and bookllers_book.id=$id and bookllers_book.uid='$sellerid'";
   $result=mysqli_query($con,$s) ;
   if (mysqli_num_rows($result) < 1) {
     $msg1= "<h3 style='color: ForestGreen;'> You are not authorized seller of this book! Please select your own book only!</h3><h4 style='text-decoration:none;'><a href='bookllers_show.php'>Go Back</a></h4>";
   }
   else
        $flag=0;

   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Book</title>
	<link rel="stylesheet" type="text/css" href="create_booklers.css">
</head>
<body>
 <h1 style="background-color: LimeGreen ;color: white;margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px">Update Book!</h1>
 <div class="c1">
 <h3 style="color: ForestGreen;">Hello <?php echo $fnme." ".$lnme;?>!</h3><br>

 <?php

 if ($flag==0){
      $_SESSION["ss_bid"]=$id;
      $row=mysqli_fetch_assoc($result);

 ?>
 <form action="bookeditprocess3.php" method="POST" name="bookeditprocess2" id="bookeditprocess2" >
	
    
    Price: <input type="text" name="price" value="<?php echo $row['prc'] ?>"><br><br>
    In Stock: <input type="text" name="quantity" value="<?php echo $row['qnty'] ?>"><br><br> 
    

 
  	<input type="submit" name="Submit" value="submit">
  
 </form>
 <?php
}
else
      echo $msg1;

 ?>
 </div>
</body>
</html>