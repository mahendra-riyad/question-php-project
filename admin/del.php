<?php 
	if($_REQUEST["delete"]){
		$category_code=$_REQUEST["delete"];
		$rs=mysqli_query($con,"select * from admin_category where category_code='$category_code'");
		if($r=mysqli_fetch_array($rs)){
			$cat=$r["category"];
		}
		include("db.php");
		mysqli_query($con,"update admin_category set status=1 where category_code='$category_code'");
		mysqli_query($con,"update user_category set status=1 where user_category='$cat'");
	}
 ?>