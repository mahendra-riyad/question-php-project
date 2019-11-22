<?php
if(empty($_COOKIE["user"])){
	header("location:login.php?cokie=1");
}
else{ 
	if($_REQUEST["id"]){
		$question_code=$_REQUEST["id"];
		include("db.php");
		$count=0;
		$email_id=$_COOKIE["user"];
		$rs=mysqli_query($con,"select * from question_dislike where question_code='$question_code'");
		while($r=mysqli_fetch_array($rs)){
			if($r[1]==$email_id){
				$count++;
			}
		}
		if($count==0){
			mysqli_query($con,"insert into question_dislike values('$question_code','$email_id',0) ");
			mysqli_query($con,"delete from question_like where (question_code='$question_code' AND email_id='$email_id')");
			header("location:user_profile.php");
		}
	}
}
?>