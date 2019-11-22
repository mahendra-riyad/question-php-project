<?php 
	if($_REQUEST["id"]){
		$user_code=$_REQUEST["id"];
		include("db.php");
		$rs=mysqli_query($con,"select * from question where code='$user_code'");
		if($r=mysqli_fetch_array($rs)){
			if($r["status"]==0){
				mysqli_query($con,"update question set status=1 where code='$user_code'");
					echo "success";
			}
			else{
				mysqli_query($con,"update question set status=0 where code='$user_code'");
					echo "success";
					
			}
		}
	}
 ?>