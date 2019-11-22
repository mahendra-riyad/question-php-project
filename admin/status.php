<?php 
	if($_REQUEST["id"]){
		$user_code=$_REQUEST["id"];
		include("db.php");
		$rs=mysqli_query($con,"select * from user_register where user_code='$user_code'");
		if($r=mysqli_fetch_array($rs)){
			if($r["status"]==0){
				mysqli_query($con,"update user_register set status=1 where user_code='$user_code'");
					echo "success";
			}
			else{
				mysqli_query($con,"update user_register set status=0 where user_code='$user_code'");
					echo "success";
					
			}
		}
	}
 ?>