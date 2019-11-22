<?php 
	if($_REQUEST["delete"]){
		$category_code=$_REQUEST["delete"];
		include("db.php");
		mysqli_query($con,"delete from user_category where category_code='$category_code'");
	}
 ?>