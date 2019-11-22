<?php 
	if(!isset($_COOKIE["user"])){
		header("location:login.php?cookie=1");
	}
	else{
		$email_id=$_COOKIE["user"]; 
		if(empty($_POST["answer"])){
			header("location:interested_submit_answer.php?please_enter_answer=1");
		}
		else{
			include("db.php");
			$question=$_GET["question"];
			$answer=$_POST["answer"];
		include("db.php");
		//	serial number
		$sn=0;
		$count=0;
		$rs=mysqli_query($con,"select max(sn) from answer");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn=$sn+1;

	//  random code genrate

		$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
				$b=array_rand($a,5);
			$random_code="";
			for($i=0;$i<sizeof($b);$i++){
				$random_code=$random_code.$a[$b[$i]]."_".$sn;
			}
			$rs=mysqli_query($con,"select * from answer where question='$question'");
			while($r=mysqli_fetch_array($rs)){
				if(($r["answer"]==$answer)){
					$count++;
				}
			}
			if($count==0){
				mysqli_query($con,"insert into answer values ($sn,'$random_code','$email_id','$question','$answer') ");
				header("location:interested_question.php?answer_submit=1");
			}
			else{
				header("location:interested_question.php?same_answer_already_submit=1");
			}
		
		}
	}
 ?>