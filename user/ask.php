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
    background-color:#3366FF;
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
  <div class="w3-top">
  <div class="w3-bar w3-red">
<ul>
  <li style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:#000000;">Stack<b style="color:#0000FF;">Overflow</b></p></li>
<?php 
	if(!isset($_COOKIE["user"])){
		header("location:login.php?invalid=1");
	}
	else{
		$email_id=$_COOKIE["user"];
		include("db.php");
		$aa=mysqli_query($con,"select * from user_register where email_id='$email_id'");
		if($a=mysqli_fetch_array($aa)){
?>			<li style="font-family:Courier; font-size: 26px; float:right; padding-right:30px; padding-top:10px; color:#0033FF;">Profile:<b style="color:#0000FF"><?php echo $a[2]."<br>"; ?></b></li>
			</ul>
<?php	} ?></div></div>
 <div class="row" style="margin-top:63px;">
    <div class="col-md-2">
        <div class="list-group">
        <a href="user_profile.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove; width:220px; padding-left:30px;">Home</a>
        <a href="interested.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove;width:220px;  padding-left:30px;">Area of Interest</a>
        <a href="edit_profile.php" class="list-group-item list-group--item-action"style="border-bottom:1px groove;width:220px;  padding-left:30px;">Edit Profile</a>
        <a href="ask.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;background-color:#00B900; color:#FFFFFF;">Ask question</a>
        <a href="myquestion.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;">My Question</a>
        <a href="interested_question.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;">Interested Question</a>    
        <a href="logout.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:220px;  padding-left:30px;">Logout</a>
        </div>
    </div>
    <div class="card border-secondary col-md-10" style="border:groove; border-radius:8px; border-color:#CCCCCC;">
        <h1 style="margin-top:30px; font-family:Georgia;"><b>Ask Question</b></h1>
            <table class="table table-responsive">
                <tr><td>
    <?php 
            include("db.php");
            $aa=mysqli_query($con,"select * from admin_category"); 
    ?>
        <form method="post" action="user_question.php">
            <p>Which Feed related to Question</p>
    <?php   while($a=mysqli_fetch_array($aa)){
?>
            <b><input type="checkbox" name="category[]" value="<?=$a[2]?>"><?=$a[2]?></b>
<?php
            }
?>          
            <br><br>Title <input type="text" name="title" placeholder="enter question title" class="form-control"><br>
            Full Description <textarea name="full_description" rows="5" cols="300" class="form-control"></textarea><br>
            <input type="submit" value="Search question" class="btn btn-primary">            
        </form></td></tr>
    </table>
<?php }?>
</body>
</html>