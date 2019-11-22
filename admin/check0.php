<?php 
	if(empty($_POST["email"])||empty($_POST["password"])){
		header("location:adminlogin.php?required=1");
	}
	else{
		$email=$_POST["email"];
		$password=$_POST["password"];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"stack overflow");
		$rs=mysqli_query($con,"select * from admin_login where email_id='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($r["password"]==$password){
				setcookie("user",$email,time()+3600);
				header("location:check.php");
			}
			else{
				header("location:adminlogin.php?invalid_password=1");
			}
		}
		else{
			header("location:adminlogin.php?invalid_email=1");
		}
	}
?>