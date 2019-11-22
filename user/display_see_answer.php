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
ul#stack {
	position:fixed;
	top:0px;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow:hidden;
    background-color:#E6E6E6;
}

li#stack {
    float: left;
}

li#stack a {
    display: block;
    color:#000000;
    text-align: center;
    padding: 15px 10px;
    text-decoration:none;
	background-color:#FFFFFF;
}
li#stack a:hover {
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
* {
    box-sizing: border-box;
}

input[type=text],select,text {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=email],select,text {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=password],select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
	color:#FFFFFF;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color:#0000FF;
    padding: 20px;
	width:100%;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
<style>
a:link#sign {
    background-color:#0099FF;
    color:#FFFFFF;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	margin-top:8px;
}
</style>
<style>
.col-md-2 a:hover{
background-color:#7DBEFF;
}
</style>
<style>
table {
   
    width: 100%;
	border:none;
}
 td {
    text-align:left;
    padding: 8px;
}
</style>
<style>
.answer {
    width: 1000px;
    padding: 10px;
    border: 2px solid gray;
    margin-top:20px;
	height:200px;
	border-radius:6px;
	background-color:#FFD2D2;
}
</style>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: black;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	border-radius:6px;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
}

</style>
</head>
<body style="background-color:#F8F8F8">
    <div class="w3-top">
  <div class="w3-bar w3-red">
  	<ul id="stack">
  <li id="stack" style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:black;" >Q<b style="color:#0000FF;">uestion</b></p></li>
  <li id="stack" style="float:right;"><a href="sign.php" id="sign" style="background-color:#6699FF;" class="btn btn-default">Sign Up</a></li>
  <li id="stack" style="float:right;"><a href="login.php" class="btn btn-default" id="sign" style="border:none; background-color:#E6E6E6;"> Login</a></li>
</ul> </div></div>
<div class="row" style="background-color:#F2F2F2; margin-top:60px;">
    <div class="col-md-2" >
       <div class="list-group">
		<a href="display.php" class="list-group-item list-group--item-action" style="margin-top:0px; padding-left:20px; background-color:#3366FF; color:#FFFFFF; width:240px;">Home</a>
		<a href="ask.php" class="list-group-item list-group--item-action" style=" padding-left:20px; width:240px;">Ask question</a>
		<a href="user.php" class="list-group-item list-group--item-action" style="padding-left:20px; width:240px;">User</a>
		</div>
    </div>
    <div class="card border-secondary col-md-9" style="border:groove; background-color:#FFFFFF; border-radius:6px;">
        <table class="table table-responsive">
<?php 

	if(empty($_GET["id"])){
		header("location:display.php");
	}
	else{
	$id=$_GET["id"];
	
	
		include("db.php");
		$aa=mysqli_query($con,"select * from question where code='$id'");
		if($a=mysqli_fetch_array($aa)){
		$question=$a[4];
		}
	?> <p style="color:#0099FF; font-size:24px; margin-top:30px;"><?=$question ?><br></p><p>
	<?php
		$rs=mysqli_query($con,"select * from user_question where full_description='$a[4]'");
			while($r=mysqli_fetch_array($rs)){
?>				<button style="background-color:#99CCFF; font-size:18px;border-radius: 4px;" ><?=$r[3]?></button>
		
<?php		}
?> </p><br> <?php
		$rs=mysqli_query($con,"select * from answer where question='$question' ");
		while($r=mysqli_fetch_array($rs)){
	?>
		<div class="answer"><p style="font-size:18px;"><?= $r[4] ?></p></div>
	<?php
		}
	?> <a href="sign.php" class="button button1">Your Post</a>
	<?php
	}

?>