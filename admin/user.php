<!DOCTYPE html>
<html>
<head>
	<title>stackoverflow.com</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#006666;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  font-family:Courier;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
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
}
li a:hover {
    background-color:#3366FF;
}
.col-md-2 a{
background-color:#FFFFFF;
color:#333333;
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
<body style="background-color:#F8F8F8;">
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
	<h1 style="margin-top:30px; font-family:Courier;"><b>All User</b></h1>
		<table class="table table-responsive">
			<?php 
	include("db.php");
	$rs=mysqli_query($con,"select * from user_register");
	while($r=mysqli_fetch_array($rs)){
?>
		<tr><td><a href="#" style="font-size:24px; font-family:Courier;"><?=$r[2]?></a><br><b style="color:#0099FF; font-size:18px; font-family:Geneva;"><?=$r[3]?></b></td><td>
	<?php	if($r[5]==0){  ?>
		<p id="r<?=$r[1]?>"><button class="btn btn-danger" id="<?=$r[1]?>" style="margin-top:15px;">block</button></p>
	<?php	} 
		else{  ?>
		<p id="a<?=$r[1]?>"><button class="btn btn-success" id="<?=$r[1]?>" style="margin-top:15px;">unblock</button></p>
	<?php	} ?>
		</td><td>
			<a href="user_question.php?id=<?=$r[1]?>"><button  class="button">View Question</button></a></td></tr>
	
<?php
	} ?>

<?php } ?>