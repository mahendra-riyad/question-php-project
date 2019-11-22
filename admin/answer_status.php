<?php 
	if($_REQUEST["id"]){
		$answer_code=$_REQUEST["id"];
		include("db.php");
		$rs=mysqli_query($con,"select * from answer where answer_code='$answer_code'");
		if($r=mysqli_fetch_array($rs)){
			if($r["status"]==0){
				mysqli_query($con,"update answer set status=1 where answer_code='$answer_code'");
					echo "success";
			}
			else{
				mysqli_query($con,"update answer set status=0 where answer_code='$answer_code'");
					echo "success";
					
			}
		}
	}
 ?>