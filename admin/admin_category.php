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
<script type="text/javascript">
	$(document).ready(function(){
		$(".btn.btn-default").click(function(){
			var v=$("#category").val();
			$.post("category.php",{category:v},function(data){
                
				$("#msg").append(data);	

			});
			
		});
	});
	</script>
<script>
		/*$("button").click(function(){*/
		$(document).on("click",".btn.btn-danger",function(){
			var v=$(this).attr("id");
			$.post("del.php",{delete:v},function(data){
				$("#r"+v).fadeOut(1000);
			});
		});
</script>
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
<style>
label {
    padding: 10px 10px 10px 0;
	color:#666666;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text]:focus {
    background-color: lightblue;
}
</style>
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
		<a href="admin_category.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px; background-color:#00B900; color:#FFFFFF;">Add New Field</a>
		<a href="user.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">User</a>
		<a href="logout.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Logout</a>
		</div>
	</div>
	  <div class="card border-secondary col-md-10" style="border:groove; margin-top:0px; background-color:#FFFFFF; border-color:#CCCCCC; border-radius:8px;">

	<h1 style="margin-top:30px; font-family:Courier; letter-spacing:2px; word-spacing:4px;"><b style="color:#0033CC;">New Interested Field</b></h1>
		<table class="table table-responsive">
	<tr ><td style="background-color:#E5E5E5;"><div class="form">		
			<div class="col-25"><label>New Interested Field</label></div><div class="col-75"><input type="text" name="category" id="category" placeholder="New Interested Field...."></div>
				<button class="btn btn-default">submit</button>
	</div><br></td></tr>

	<tr><td>
	<!-- from database data -->
	<table class="table table-responsive" id="msg">
	<tr><td style="background-color:#99CCCC;"></td><td style="color:#000000; text-align:center; font-family:Courier; font-size:24px; background-color:#99CCCC;">New Interested Field</td><td style="background-color:#99CCCC;"></td></tr>
<?php 
	include("db.php");
	$rs=mysqli_query($con,"select * from admin_category where status=0");
	while($a=mysqli_fetch_array($rs)){
?>		
<tr id="r<?=$a[1] ?>"><td><?=$a[2]?></td><td style="text-align:center;"><button id="<?=$a[1] ?>" class="btn btn-danger">delete</button></td><td style="text-align:center;"><a href="edit.php?id=<?=$a[1]?>"><button id="<?=$a[1] ?>" class="btn btn-default">edit</button></a></td></tr>
<?php } ?>
</table></td></tr>  </table>
<?php } ?>
