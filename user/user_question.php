<?php 
	if(!isset($_COOKIE["user"])){
		header("location:login.php?cookie_not_set=1");
	}
	else{
		if(empty($_POST["category"])){
			header("location:interested.php?please_select_area_of_interest");
		}
		
		if(empty($_POST["category"])||empty($_POST["title"])||empty($_POST["full_description"])){
			header("location:ask.php?all_field_required=1");
		}
		else{
			$email_id=$_COOKIE["user"];			
			$title=$_POST["title"];
			$full_description=$_POST["full_description"];
			$count=0;
			include("db.php");
	//	serial number
		$sn=0;
		$rs=mysqli_query($con,"select max(sn) from user_question");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn=$sn+1;

	//  random code genrate

		$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
		$b=array_rand($a,5);
		$question_code="";
		for($i=0;$i<sizeof($b);$i++){
			$question_code=$question_code.$a[$b[$i]]."_".$sn;
		}
	// double question not insert code
		$rs=mysqli_query($con,"select * from user_question");
		while($r=mysqli_fetch_array($rs)){
		   if($r["full_description"]==$full_description){
		   			$count=1;
			foreach($_POST["category"] as $category){
				if(($r["question_category"]==$category) && ($r["full_description"]==$full_description)){
						$count++;
						echo "<h2>"."Q.".$r["full_description"]."</h2>";
					$aa=mysqli_query($con,"select * from answer where question='$full_description'");
					while($a=mysqli_fetch_array($aa)){
						echo "<h3>"."Ans.".$a[4]."</h3>";
					}
				}
			}
		   }
		}
		if($count==0){
			mysqli_query($con,"insert into question values($sn,'$question_code','$email_id','$title','$full_description',0,0) ");
			foreach($_POST["category"] as $category){
				mysqli_query($con,"insert into user_question values($sn,'$question_code','$email_id','$category','$title','$full_description') ");
				header("location:ask.php?question_submit=1");
			}
		}
		if($count==1){
			mysqli_query($con,"insert into user_question values($sn,'$question_code','$email_id','$category','$title','$full_description') ");
				header("location:ask.php?question_category_submit=1");
		}
		}
	}	
 ?>