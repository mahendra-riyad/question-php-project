<?php 
	
	if($_REQUEST["password"]){
		$count=0;
		$password=$_REQUEST["password"];
		$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
		for($i=0; !empty($password[$i]);$i++){
			for($j=0;$j<sizeof($a);$j++){
				if($a[$j]==$password[$i]){
					$count++;
				}
			}
		}
		if($count>5){
			echo "strong";
		}
		elseif ($count>=4) {
			echo "good";
		}
		else{
			echo "weak";
		}
	}
 ?>