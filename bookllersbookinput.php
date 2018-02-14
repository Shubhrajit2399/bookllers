<?php
session_start();

$fname=$_SESSION["ss_fnm"];
$lname=$_SESSION["ss_lnm"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" type="text/css" href="create_booklers.css">
	
</head>
<body>
<h1 style="background-color: LimeGreen ;color: white;margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px">Insert Book!</h1>
<div class="c1">
<h3 style="color: ForestGreen;">Hello <?php echo $fname." ".$lname;?>!</h3><br>


<form action="bookllersbookprocess.php" method="POST" name="bookllersbookinput" id="bookllersbookinput" enctype="multipart/form-data">
	
    Book Name: <input type="text" name="bname"><br><br>
    Author: <input type="text" name="author"><br><br>
    Price: <input type="text" name="price"><br><br>
    In Stock: <input type="text" name="quantity"><br><br>
    Cover Image: <input type="file" name="book_img"> [ Images should be within 400KB and .jpg, .jpeg format ]
    <br><br>

 
  	<input type="submit" name="Submit" value="submit">
  
 </form>
  <?php if(isset($_REQUEST['warn3'])) echo $_REQUEST['warn3']; ?>
</div>
</body>
</html>
