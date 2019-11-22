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

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#0033FF;
    color: white;
	text-align:center;
}
</style>
<style> 
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
	font-size:30px;
	font-family:"Times New Roman", Times, serif;
}
</style>
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
<script type="text/javascript">
	$(document).on("click",".btn.btn-danger",function(){
			var v=$(this).attr("id");
			$.post("answer_status.php",{id:v},function(data){
				if(data=="success"){
					$("#r"+v).fadeOut(1000);
					$("#a"+v).fadeIn(1000);
				}
			});
		});
		$(document).on("click",".btn.btn-success",function(){
			var v=$(this).attr("id");
			$.post("answer_status.php",{id:v},function(data){
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
		<div class="container-fluid">
<div class="row">
	<div class="col-md-2" style="margin-left:-15px; margin-top:60px;">
		<div class="list-group">
		<a href="check.php" class="list-group-item list-group--item-action"style=" text-align:center;width:240px">Home</a>
		<a href="admin_category.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Add New Field</a>
		<a href="user.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;; background-color:#00B900; color:#FFFFFF;">User</a>
		<a href="logout.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Logout</a>
		</div>
	</div>
	 <div class="card border-secondary col-md-10" style="border:groove; margin-top:60px; background-color:#FFFFFF; border-color:#CCCCCC; border-radius:8px;">
	<h1 style="margin-top:30px; font-family:Courier;"><b>Top Answer</b></h1>
		<table class="table table-responsive">
<?php 
	if(!isset($_COOKIE["user"])){
		header("location:adminlogin.php?cookie=1");
	}
	else{
		$code=$_GET["id"];
		include("db.php");
		$aa=mysqli_query($con,"select * from question where code='$code'");
		if($a=mysqli_fetch_array($aa)){
				$question=$a[4];
		?> <tr><td style="color:#0000FF; background-color:#9BCDFF; font-size:30px; font-family:Courier;"><?=$question ?><br>
		<?php 		$rs=mysqli_query($con,"select * from user_question where full_description='$a[4]'");
			while($r=mysqli_fetch_array($rs)){
?>				<button style="background-color:#99CCFF; font-size:18px"><?=$r[3]?></button>
		
<?php		}?></td></tr>
	<?php	}
		$rs=mysqli_query($con,"select * from answer where question='$question'");
		while($r=mysqli_fetch_array($rs)){
?>	<tr><td>
	<textarea cols="60" rows="10"><?=$r[4]?></textarea>
	<?php	if($r[5]==0){  ?>
		<p id="r<?=$r[1]?>"><button class="btn btn-danger" id="<?=$r[1]?>" style="margin-top:15px; float:right;">Answer block</button></p>
	<?php	} 
		else{  ?>
		<p id="a<?=$r[1]?>"><button class="btn btn-success" id="<?=$r[1]?>" style="margin-top:15px; float:right;">Answer unblock</button></p>
	<?php	} ?>
	</td></tr><br>
<?php
		}
	} 
?> <tr><td><a href="#" class="button">Your Answer</a></td></tr> </table> <?php
}
 ?>
</body>
</html>