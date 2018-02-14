<?php
include("database_con.php");
session_start();
$bkid=$_REQUEST["b1"];

?>
<script>
	var answer=confirm("Confirm your shopping!");
	if (answer) {
		window.location='';
	}
	else
	{
		
		window.location='bookllers_show.php';
	}
</script>