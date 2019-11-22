<?php 
	setcookie("user","",time()+60);
	header("location:display.php");
 ?>