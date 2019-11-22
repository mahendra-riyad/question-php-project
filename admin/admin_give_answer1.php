<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style> 
textarea {
    width: 100%;
    height: 200px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color:#F3F3F3;
    font-size: 24px;
    resize: none;
	font-size:30px;
	font-family:Times;
	color:#0099FF;
}
</style>
<style>
.button1 {
    background-color:#009933; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 12px 2px;
    cursor: pointer;
	font-family:Courier;
}
.button1 {border-radius: 8px;}
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

tr:nth-child(odd){background-color: #f2f2f2}

th {
    background-color:#0033FF;
    color: white;
	text-align:center;
}
</style>
</head>
<body  style="background-color:#F8F8F8">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
 <div class="w3-top">
  <div class="w3-bar w3-red">
	<ul>
  <li style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:black;" >Stack<b style="color:#0000FF;">Overflow</b></p></li>
 
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
		<div class="container-fluid">
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		<a href="check.php" class="list-group-item list-group--item-action" style="margin-top:90px; text-align:center;">Home</a><br>
		<a href="admin_category.php" class="list-group-item list-group--item-action" style=" text-align:center;">Add Category</a><br>
		<a href="user.php" class="list-group-item list-group--item-action" style=" text-align:center;background-color:#0061C1; color:#FFFFFF;">User</a><br>
		</div>
	</div>
	<div class="card border-secondary col-md-10" style="border:inset; margin-top:63px;">
	<h1 style="margin-top:30px; font-family:Courier;"><b>Submit Answer</b></h1>
		<table class="table table-responsive">
<?php 
		$question_code=$_GET["id"];
		include("db.php");
		$rs=mysqli_query($con,"select * from question where code='$question_code'");
		if($r=mysqli_fetch_array($rs)){
			$question=$r[4];
	?> <tr><td style="color:#0000FF; background-color:#9BCDFF; font-size:30px; font-family:Courier;"><?=$question?><br>
<?php  $aa=mysqli_query($con,"select * from user_question where full_description='$r[4]'");
	while($a=mysqli_fetch_array($aa)){
?>				<button style="background-color:#99CCFF; font-size:18px"><?=$a[3]?></button>
		
<?php		}?></td></tr>
	<?php
	}
	?> <tr><td><form method="post" action="answer1.php?id=<?=$r[1]?>">
		<textarea name="answer" rows="10" cols="130"></textarea>
		<input type="submit" value="Post" class="button1">
	</form></td></tr>
	<?php
	}
 ?>