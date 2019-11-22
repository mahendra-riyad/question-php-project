<?php 
	if(!isset($_COOKIE["user"])){
		header("location:login.php?invalid=1");
	}
	else{
		$email_id=$_COOKIE["user"];
		$count=0;
		include("db.php");
		$question=$_GET["question"];
		$rs=mysqli_query($con,"select * from answer where question='$question' ");
		while($r=mysqli_fetch_array($rs)){
			$count++;
			echo $r[4]."<br>";
		}
		if($count==0){
			header("location:interested_question.php?No_one_answer these_question=1");
		}
	}
?>