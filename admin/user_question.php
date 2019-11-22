<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
ul {
	position:fixed;
	top:0px;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow:hidden;
    background-color:#E6E6E6;
}

li {
    float: left;
}

li a {
    display: block;
    color:#000000;
    text-align: center;
    padding: 24px 16px;
    text-decoration:none;
	background-color:#FFFFFF;
	 border-bottom: 1px groove green;
}
li a:hover {
    background-color:#00B900;
}
.col-md-2 a{
background-color:#F8F8F8;
color:#333333;
width:100%;
 position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
}
.col-md-2 a:hover{
background-color:#7DBEFF;
}
</style>
<style>
table {
    border-collapse: collapse;
    width: 100%;
	border:none;
}
 td {
    text-align:left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#0033FF;
    color: white;
	text-align:center;
}
</style>
<script type="text/javascript">
	$(document).on("click",".btn.btn-danger",function(){
			var v=$(this).attr("id");
			$.post("status.php",{id:v},function(data){
				if(data=="success"){
					$("#r"+v).fadeOut(1000);
					$("#a"+v).fadeIn(1000);
				}
			});
		});
		$(document).on("click",".btn.btn-success",function(){
			var v=$(this).attr("id");
			$.post("status.php",{id:v},function(data){
				if(data=="success"){
					$("#a"+v).fadeOut(1000);
					$("#r"+v).fadeIn(1000);
				}
			});
		});
</script>
</head>
<body>
 <div class="w3-top">
  <div class="w3-bar w3-red">
	<ul>
  <li style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:black;" >Q<b style="color:#0000FF;">uestion</b></p></li>
 
<?php 
	if(!isset($_COOKIE["user"])){
		header("location:adminlogin.php?required=1");
	}
	else{
		$email=$_COOKIE["user"];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"stack overflow");
		$rs=mysqli_query($con,"select * from admin_login where email_id='$email'");
		if($r=mysqli_fetch_array($rs)){
	?>	 <li style="float:right; margin-right:10px;"><p style="text-align:center; font-family:Courier; font-size:36px; color:#000099;">Admin:<b style="color:#0033FF;"><?=$r[2]?></b></p></li>
  </ul></div></div>	
	<?php
		}
?>
	<div class="row" style="margin-top:63px;">
	<div class="col-md-2">
		<div class="list-group">
		<a href="check.php" class="list-group-item list-group--item-action"style=" text-align:center;width:240px;">Home</a>
		<a href="admin_category.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Add New Field</a>
		<a href="user.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px; background-color:#00B900; color:#FFFFFF;">User</a>
		<a href="logout.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Logout</a>
		</div>
	</div>
	<div class="card border-secondary col-md-10" style="border:groove; margin-top:0px; background-color:#FFFFFF; border-color:#CCCCCC; border-radius:8px;">
	<h1 style="margin-top:30px; font-family:Courier;"><b>User Question</b>
		
<?php 
	if(!isset($_COOKIE["user"])){
		header("location:adminlogin.php?cookie=1");
	}
	else{
		if(!isset($_GET["id"])){
			header("location:view_user.php?id_not_found");
		}
		else{
			$user_code=$_GET["id"];
			$count=0;
			include("db.php");
			$aa=mysqli_query($con,"select * from user_register where user_code='$user_code'");
			if($a=mysqli_fetch_array($aa)){
				$email_id=$a[3];
	?>		<p style="float:right; color:#3333CC; font-family:Courier;">Profile:<i><?=$a[2]?></i></p>	<?php
			}
?>	</h1>
<table class="table table-responsive">	
<?php
		$aa=mysqli_query($con,"select * from question where email_id='$email_id'");
		while($a=mysqli_fetch_array($aa)){
			$count++;
?>  
		<tbody id="myTable"><tr><td>
	<?php $pp=mysqli_query($con,"select * from answer where question='$a[4]'");
			$num_rows=mysqli_num_rows($pp);
			if(($num_rows)>0){
		?>	<a href="view_answer.php?id=<?=$a[1]?>"><button class="btn btn-default" style="margin-top:10px; border-color:#009900;"><?=$num_rows?><br> Answer</button></a>
		<?php }
		 else{
		?>		
		<a href="display_see_answer.php?id=<?=$a[1]?>"><button class="btn btn-default" style="margin-top:10px; border:none;"><?=$num_rows?><br> Answer</button></a>
		<?php
				}
	?>
		</td><td><a href="#"><button class="btn btn-default" style="margin-top:10px; border:none;"><?=$a[6]?><br>View</button></a>
	
		</td>
		<?php 		$qq=mysqli_query($con,"select * from question_like where (question_code='$a[1]') AND status=0");
				$count = mysqli_num_rows($qq);
			?>	
				<td><p style="text-align:center; margin-top:10px;"><?=$count?> <span class="glyphicon glyphicon-thumbs-up"></span></p>
				</td>
		
		<td style="font-size:24px; color:#009999; font-family:Arial, Helvetica, sans-serif; letter-spacing:1px; word-spacing:2px;" colspan="4">
           <?=$a[4]?>
            <br>
</td><td><a href="admin_give_answer.php?id=<?=$a[1]?>"> &nbsp;<button class="btn btn-danger" style="margin-top:17px;">Give Answer</button></a></td></tr></tbody>
<?php	}?>		</table>
	<?php	if($count==0){

			header("location:user.php?not_any_question_submited=1");
		}
		?>
<?php		
		}
	}
	}
 ?>
</body>