<?php 
	if($_REQUEST["edit"]){
		$category_code=$_REQUEST["edit"];
		$rs=mysqli_query($con,"select * from admin_category where category_code='$category_code'");
		if($r=mysqli_fetch_array($rs)){
/*?>
	<form method="post" action="check.php">
		category<input type="text" name="category" value="<?=$r[2]?>">
				<input type="submit" name="update">
	</form>
<?php*/
		echo "hii";
		}
	}
 ?>