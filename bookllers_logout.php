<?php
session_start();
//session_gc();
session_destroy();
//register_shutdown_function('session_write_close');
header("location:bookllers_show.php");
exit();

?>