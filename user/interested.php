<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).on("click",".btn.btn-danger",function(){
			var v=$(this).attr("id");
			$.post("user_category_delete.php",{delete:v},function(data){
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
    overflow: hidden;
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
}

li a:hover {
    background-color:#00B900;
}
</style>
<style type="text/css">
	input[type=text],select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	
}

input[type=submit] {
    background-color:#009999;
    color: white;
    padding: 20px 25px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:100%;
}
.container {
    border-radius: 5px;
    background-color:#CCCCCC;
    padding: 20px;
	width:100%;
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
table {
    border-collapse: collapse;
    width: 100%;
	border:none;
	background-color: #f2f2f2;
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
.col-md-2 a:hover{
background-color:#7DBEFF;
}
</style>
<style>
.col-md-2 a{
background-color:#F8F8F8;
color:#333333;
width:100%;
 position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
}
.col-md-2 a:hover{
background-color:#00B900;
}
</style>
</head>
<body style="background-color:#F9F9F9;">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<?php 
	if(!isset($_COOKIE["user"])){
		header("location:login.php?invalid=1");
	}
	else{
		$email_id=$_COOKIE["user"];
		include("db.php");
		$rs=mysqli_query($con,"select * from user_register where email_id='$email_id'");
		if($r=mysqli_fetch_array($rs)){
?>
 <div class="w3-top">
  <div class="w3-bar w3-red">	
<ul>
  <li style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:black" >Q<b style="color:#0000FF;">uestion</b></p></li>

			<li style="font-family:Courier; font-size: 26px; float:right; padding-right:30px; padding-top:10px; color:#0033FF;">Profile:<b style="color:#0000FF"><?php echo $r[2]."<br>"; ?></b></li>
</ul></div></div>
<?php }
?>
<div class="row" style="margin-top:60px;">
    <div class="col-md-2">
        <div class="list-group">
        <a href="user_profile.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove; width:220px; padding-left:30px;">Home</a>
        <a href="interested.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove;width:220px;  padding-left:30px; background-color:#00B900; color:#FFFFFF;">Area of Interest</a>
        <a href="edit_profile.php" class="list-group-item list-group--item-action"style="border-bottom:1px groove;width:220px;  padding-left:30px;">Edit Profile</a>
        <a href="ask.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;">Ask question</a>
        <a href="myquestion.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;">My Question</a>
        <a href="interested_question.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;">Interested Question</a>    
        <a href="logout.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;">Logout</a>
        </div>
    </div>
    <div class="card border-secondary col-md-10" style="border:1px groove; border-color:#CCCCCC;">
	<div class="col-md-6" style="margin-left:0px;">
	<div class="panel panel-primary">
<div class="panel-heading" style="background-color:#CCCCCC;"><b style="font-family:Geneva; font-size:24px; color:#0099FF; letter-spacing:2px; word-spacing:4px;">Add New Interested Feed</b></div>
						<div class="panel-body" style="background-color:#CCCCCC;">
		<div class="container">
		
		<form method="post" action="category_add.php">
			<p style="font-size:18px;">Category</p>
			<div class="col-75"><select name="category">
	<?php		$rs=mysqli_query($con,"select * from admin_category where status=0");
				while($r=mysqli_fetch_array($rs)){
		?>			<option value="<?=$r[2]?>"><?=$r[2]?></option>
		<?php 
				}
	?>		</select></div><br><br>
		<input type="submit" value="Add Category">
		</form></div></div></div></div>
		<!--interested user category -->
	<div class="col-md-6" style="margin-left:-30px;">
		<div class="panel panel-primary">
<div class="panel-heading" style="background-color: #f2f2f2;"><b style="font-family:Geneva; font-size:24px; color:#0099FF";>Interest Category</b></div>
						<div class="panel-body" style="background-color: #f2f2f2;">
	<table class="table table-responsive">
<?php 
		$rs=mysqli_query($con,"select * from user_category where (email_id='$email_id') AND status=0");
		while($r=mysqli_fetch_array($rs)){
?>
			<tr id="r<?=$r[1]?>"><td> <?=$r[3]?></td>
			<td><button class="btn btn-danger" id="<?=$r[1]?>">delete</button></td></tr>	
				
<?php	}?>
	</table></div>
<?php }?>
</body></html>