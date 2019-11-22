<?php 
	if(!isset($_COOKIE["user"])){
		header("location:adminlogin.php?required=1");
	}
	else{
		$email=$_COOKIE["user"];
		$category_code=$_GET["id"];
		$category=$_POST["category"];
		include("db.php");
		mysqli_query($con,"update admin_category set category='$category' where category_code='$category_code'");
		header("location:check.php?category_update=1");
	}
?>