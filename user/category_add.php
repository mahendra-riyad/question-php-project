<?php 
if(!isset($_COOKIE["user"])){
	header("location:login>php?cookie");
}
else{
	if(empty($_POST["category"])){
		header("location:interested.php?required=1");	
	}
	else{
		$category=$_POST["category"];
		$email_id=$_COOKIE["user"];
		$count=0;
		include("db.php");
		//	serial number
		$sn=0;
		$rs=mysqli_query($con,"select max(sn) from user_category");
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
		$rs=mysqli_query($con,"select * from user_category where email_id='$email_id'");
		while($r=mysqli_fetch_array($rs)){
			if($r[3]==$category){
				$count++;
			}
		}
		if($count==0){
			mysqli_query($con,"insert into user_category values($sn,'$random_code','$email_id','$category',0) ");
				header("location:interested.php?category_add=1");
		}
		else{
			header("location:interested.php?same_category_already_add=1");
		}

	}
}
 ?>