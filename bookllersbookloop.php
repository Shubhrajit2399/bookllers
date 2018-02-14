<?php
include("database_con.php");
session_start();

?>
<script>
	var answer=confirm("Do you want to enter more books?");
	if (answer) {
		window.location='bookllersbookinput.php';
	}
	else
	{
		
		window.location='bookllers_show.php';
	}
</script>