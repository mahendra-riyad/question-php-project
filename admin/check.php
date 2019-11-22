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
	$(document).on("click",".btn.btn-danger",function(){
			var v=$(this).attr("id");
			$.post("question_status.php",{id:v},function(data){
				if(data=="success"){
					$("#r"+v).fadeOut(1000);
					$("#a"+v).fadeIn(1000);
				}
			});
		});
		$(document).on("click",".btn.btn-success",function(){
			var v=$(this).attr("id");
			$.post("question_status.php",{id:v},function(data){
				if(data=="success"){
					$("#a"+v).fadeOut(1000);
					$("#r"+v).fadeIn(1000);
				}
			});
		});
</script>
<style>
.button1 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 12px 2px;
    cursor: pointer;
	font-family:Courier;
}
.button2 {
    background-color:#77BBFF; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	font-family:Courier;
}
.button1 {border-radius: 8px;}
.button2 {border-radius: 8px;}
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
    
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#0033FF;
    color: white;
	
}
th:hover{
	background-color:  #f2f2f2;
}
</style>
<style>
.search {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #0099FF;
  margin-bottom: 0px;
  box-shadow:1px 2px 2px 1px #0099FF;
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
		<a href="check.php" class="list-group-item list-group--item-action"style=" text-align:center;width:240px; background-color:#00B900; color:#FFFFFF;">Home</a>
		<a href="admin_category.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Add New Field</a>
		<a href="user.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">User</a>
		<a href="logout.php" class="list-group-item list-group--item-action" style=" text-align:center;width:240px;">Logout</a>
		</div>
	</div>
	  <div class="card border-secondary col-md-10" style="border:1px groove; margin-top:0px; background-color:#FFFFFF; border-color:#CCCCCC;">
	<p style="margin:10px; word-spacing:4px; letter-spacing:2px;">search any question</p>
		<h1>
       <input id="myInput" type="text" placeholder="Enter question ....." class="search"></h1>
		<table class="table table-responsive">
		<?php
		include("db.php");	
		$aa=mysqli_query($con,"select * from question");
		while($a=mysqli_fetch_array($aa)){
?>		<tbody id="myTable">
		<tr><td><div class="col-sm-2"></div></td>
		<td style="font-size:24px; color:#0033FF;" colspan="4">
		<?php 		$rs=mysqli_query($con,"select * from user_question where full_description='$a[4]'");
			if($r=mysqli_fetch_array($rs)){
				$as=mysqli_query($con,"select * from user_register where email_id='$a[2]'");
				if($p=mysqli_fetch_array($as)){
?>				<p style="font-size:12px; color:#666666;">question added by:<a href="" style="font-size:14px; text-decoration:none;"><?=$p[2]?></a> </p>
		
<?php		}

			}?>
		<p style="letter-spacing:1pxx; word-spacing:2px;"><?=$a[4]?></p>
</td><td><a href="view_answer.php?id=<?=$a[1]?>"><button class="button1" >View Answer</button></a></td><td><a href="admin_give_answer.php?id=<?=$a[1]?>"><button class="button1">Give Answer</button></a></td><td>
		<?php	if($a[5]==0){  ?>
		<p id="r<?=$a[1]?>"><button class="btn btn-danger" id="<?=$a[1]?>" style="margin-top:15px;">block</button></p>
	<?php	} 
		else{  ?>
		<p id="a<?=$a[1]?>"><button class="btn btn-success" id="<?=$a[1]?>" style="margin-top:15px;">unblock</button></p>
	<?php	} ?></td></tr></tbody>
<?php	}?>
		</table></div></div></div>
	
<?php 
	}
 ?> 
 
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body></html>