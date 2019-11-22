<?php 
	if(empty($_POST["user_name"])||empty($_POST["email_id"])||empty("password")){
		header("location:sign.php?all_field_required=1");
	}
	else{
		$user_name=$_POST["user_name"];
		$email_id=$_POST["email_id"];
		$password=$_POST["password"];
		$status=0;
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"question");

	//	serial number
		$sn=0;
		$rs=mysqli_query($con,"select max(sn) from user_register");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn=$sn+1;

	//  random code genrate

		$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
		$b=array_rand($a,5);
		$user_code="";
		for($i=0;$i<sizeof($b);$i++){
			$user_code=$user_code.$a[$b[$i]]."_".$sn;
		}
		$aa=mysqli_query($con,"select * from user_register where email_id='$email_id'");
		if(!($a=mysqli_fetch_array($aa))){
			mysqli_query($con,"insert into user_register values($sn,'$user_code','$user_name','$email_id','$password',$status)");
			header("location:login.php?register_success=1");
		}
		else{
			header("location:sign.php?email_already_registered=1");
		}

	}
 ?>