<?php 
	setcookie("user","",time()+60);
	header("location:adminlogin.php?id=logout");
 ?>