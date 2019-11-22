<?php 
	if($_REQUEST["profile"]){
		$profile=$_REQUEST["profile"];
		include("db.php");
		$rs=mysqli_query($con,"select * from user_register where user_name='$profile'");
		while($r=mysqli_fetch_array($rs)){
		?>
			<div class="col-sm-4"><?=$r[3]?></div> 
		<?php 
		} 
		echo "hii";
	}
 ?>