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
	z-index:1;
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
    border-collapse: collapse;
    width: 100%;
	border:none;
}
 td {
    text-align:left;
    padding: 8px;
}



th {
    background-color:#0033FF;
    color: white;
	text-align:center;
}
</style>

<script>
	$(document).ready(function(){
		$("#name").keyup(function(){
			var v=$("#name").val();
		$.post("jquery.php",{profile:v},function(data){
		//	$("#msg").html(data);
		alert();
      )};

		});
	});
</script>

</head>
<body style="background-color:#F8F8F8">
    <div class="w3-top">
  <div class="w3-bar w3-red">
  	<ul id="stack">
  <li id="stack" style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:black;" >Q<b style="color:#0000FF;">uestion</b></p></li>
  <li id="stack" style="float:right;"><a href="sign.php" id="sign" style="background-color:#6699FF;" class="btn btn-default">Sign Up</a></li>
  <li id="stack" style="float:right;"><a href="login.php" class="btn btn-default" id="sign" style="border:none; background-color:#E6E6E6; color:#3366FF;"> Login</a></li>
</ul> </div></div>
<div class="row" style="margin-top:63px;">
	<div class="col-md-2">
		<div class="list-group">
		<a href="display.php" class="list-group-item list-group--item-action" style="margin-top:0px;text-align:center; width:240px;">Home</a>
		<a href="ask.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Ask question</a>
		<a href="user.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px; background-color:#3366FF; color:#FFFFFF;">User</a>
		</div>
	</div>
    <div class="card border-secondary col-md-9" style="border:1px groove; margin-top:0px; background-color:#FFFFFF; border-color:#CCCCCC; border-radius:6px;">	
		<h1 style="margin-top:30px; font-family:Courier;"><b>User</b></h1>
<?php
    include("db.php");
    $rs=mysqli_query($con,"select * from user_register");
    while($r=mysqli_fetch_array($rs)){
?>
        <div class="col-sm-4" style="height:100px;"><span class="glyphicon glyphicon-user" style="height:20px;"></span> <a href="user_view.php?id=<?=$r[3]?>" style="font-size:24px; font-family:Courier;"><?=$r[2]?></a><br><b style="color:#0099FF; font-size:18px; font-family:Geneva;"><?=$r[3]?></b><br>
		
	<?php  $email_id=$r[3];
	 $aa=mysqli_query($con,"select * from user_category where email_id='$email_id'");
			while($a=mysqli_fetch_array($aa)){
				$category=$a[3];
				$pp=mysqli_query($con,"select * from admin_category where category='$category'");
				if($p=mysqli_fetch_array($pp)){
			?> <a href="category_question.php?id=<?php echo $p[1]; ?>"><button style="border-radius:10px;"><?php echo $a[3]; ?></button></a>
			<?php
			}} ?>
		</div>
 <?php   }?></div></div>
 <div class="row" style="height:100px; background-color:#666666;"> 
		<p style="margin-left:20px; color:#0099FF; word-spacing:4px; letter-spacing:2px; font-size:18px; font-family:'Times New Roman', Times, serif; margin-top:20px;"><a href="display.php" style="text-decoration:none;">Question</a></p>
       <b style="margin-left:20px; color:#FFFFFF; word-spacing:4px; letter-spacing:2px; font-size:18px; font-family:'Times New Roman', Times, serif; margin-top:20px;"> Passionatley created by MAHENDRA RIYAD</b></div>      
        </div>
 <!--	<div id="msg" class="col-sm-4"></div><br>
	<div><input type="text" id="name"></div> -->
 </body>
 
 