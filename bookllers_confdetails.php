<?php
include("database_con.php");
session_start();
if (! empty ($_SESSION["buyerfnm"])){
$id=$_REQUEST["bookid"];
$buyer_fnm=$_SESSION["buyerfnm"];
$buyer_lnm=$_SESSION["buyerlnm"];
}
else {
  header("location:bookllers_show.php");
}
$d="select bookllers.firstname as seller_fnm,bookllers.lastname as seller_lnm,bookllers_book.id as bookid,bookllers_book.uid as sellerid,bookllers_book.book_name as bookname,bookllers_book.author as bookauthor,bookllers_book.price as bookprc,bookllers_book.img_path as bookpic from bookllers_book, bookllers where bookllers_book.uid=bookllers.id and bookllers_book.id=$id ";
$result=mysqli_query($con,$d);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
	<link rel="stylesheet" type="text/css" href="create_booklers.css">
</head>
<body>
   <h1 style="background-color: LimeGreen ;color: white;margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px">Order Details:-</h1>
   <div class="c1">
      <h3 style="color: ForestGreen;">Hello <?php echo $buyer_fnm." ".$buyer_lnm;?>!</h3><br>
      <hr>
      <h4 style="color: ForestGreen;">Your Order Details:-</h4><br>
      <?php
       while($row=mysqli_fetch_assoc($result)){
         
       	echo "<b>Seller Name:</b> ".$row["seller_fnm"]." ".$row["seller_lnm"]."<br>";
       	echo "<b>Book Name:</b> ".$row["bookname"]."<br>";
        echo "<b>Author:</b> ".$row["bookauthor"]."<br>";
        echo "<b>Price:</b> ".$row["bookprc"]."<br>";
        ?>
        <b>Image:</b><br><img src="<?php echo $row["bookpic"]; ?>" width="80" height="100"><br>
       

       <?php 
       $_SESSION["book_id"]=$row["bookid"];
       $_SESSION["seller_id"]=$row["sellerid"];
       $_SESSION["bknm"]=$row["bookname"];
       $_SESSION["athr"]=$row["bookauthor"];
       $_SESSION["prc"]=$row["bookprc"];
       $_SESSION["img"]=$row["bookpic"];
       }
      ?>
      <a style="text-decoration: none;" href="bookllers_confdetailsprocess.php?bkid=<?php echo $id;?>"><button class="button button">Confirm</button></a>
   </div>
</body>
</html>