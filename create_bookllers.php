<!DOCTYPE html>
<html>
<head>
	<title>Sign Up!</title>
	<link rel="stylesheet" type="text/css" href="create_booklers.css">
</head>
<body>
<h1 style="background-color: LimeGreen ;color: white;margin-top: 0px;padding-left: 2%;margin-left: 5px;margin-right: 5px">Sign Up!</h1>
<div class="c1">
	<form id="create_booklers" name="create_booklers" action="create_booklerslink.php" method="GET">
		First name: <input type="text" name="firstname"><br><br>Last name: <input type="text" name="lastname">
<br><br>
Current Year: <select name="year">
			<option value="First">First</option>
			<option value="Second">Second</option>
			<option value="Third">Third</option>
			<option value="Fourth">Fourth</option>
			<option value="Passed Out">Passed Out</option></select><br><br>
Branch: <select name="branch">
			<option value="CE">CE</option>
			<option value="CSE">CSE</option>
			<option value="EIE">EIE</option>
			<option value="ECE">ECE</option>
			<option value="IT">IT</option>
			<option value="ME">ME</option>
			<option value="PE">PE</option>
			<option value="BT">BT</option>
			<option value="EE">EE</option>
			<option value="CE">CE</option>
			<option value="FT">FT</option>
			<option value="ICE">ICE</option>
		</select><br><br>
		Contact No.: <input type="text" name="contact_no"><br><br>
		Whatsapp No.: <input type="text" name="whatsapp_no"><br><br>
        
        Password: <input type="password" name="Password"><br><br>
        <input type="submit" name="Submit" value="Submit">
	</form>
	<?php if(isset($_REQUEST['warn'])) echo $_REQUEST['warn']; ?>
	<?php if(isset($_REQUEST['warning'])) echo $_REQUEST['warning']; ?>
</div>
</body>
</html>