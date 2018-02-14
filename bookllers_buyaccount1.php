<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up!</title>
	<link rel="stylesheet" type="text/css" href="create_booklers.css">
</head>
<body>
<h1 style="background-color: LimeGreen ;color: white;margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px">Create Account!</h1>
<div class="c1">
	<form id="bookllers_buyaccount1" name="bookllers_buyaccount1" action="bookllers_buyaccountprocess1.php" method="GET">
		First name:<br> <input type="text" name="frstname"><br><br>Last name:<br> <input type="text" name="lstname">
        <br><br>
		Contact No.:<br> <input type="text" name="cntact_no"><br><br>
		Address:<br> <textarea rows="6" style="width: 800px;max-width: 92%" name="addrs" placeholder="Write Address..."></textarea>
		<br><br>
		Username:<br> <input type="text" name="usrname">
		<br><br>
		Password:<br> <input type="password" name="Password">
		<br><br>
		<input type="submit" name="Submit" value="Submit">
	</form>
	<?php if(isset($_REQUEST['warn2'])) echo $_REQUEST['warn2']; ?>
	<?php if(isset($_REQUEST['var'])) echo $_REQUEST['var']; ?>
</div>
</body>
</html>
