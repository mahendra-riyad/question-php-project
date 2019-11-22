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

</head>
<body style="background-color:#F8F8F8">
    <div class="w3-top">
  <div class="w3-bar w3-red">
  	<ul id="stack">
  <li id="stack" style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:black;" >Stack<b style="color:#0000FF;">Overflow</b></p></li>
  <li id="stack" style="float:right;"><a href="sign.php" id="sign" style="background-color:#6699FF;" class="btn btn-default">Sign Up</a></li>
  <li id="stack" style="float:right;"><a href="login.php" class="btn btn-default" id="sign" style="border:none; background-color:#E6E6E6;"> Login</a></li>
</ul> </div></div>
<div class="row" style="margin-top:63px;">
    <div class="col-md-2">
        <div class="list-group">
        <a href="display.php" class="list-group-item list-group--item-action" style="margin-top:0px;text-align:center; border:none; width:240px;">Home</a>
        <a href="stack.php" class="list-group-item list-group--item-action" style=" text-align:center; border:none;width:240px; background-color:#00B900; color:#FFFFFF;"><span class="glyphicon glyphicon-globe    
"></span>  Stack overflow</a>
        <a href="ask.php" class="list-group-item list-group--item-action" style=" text-align:center; border:none;width:240px;">Ask question</a>
        <a href="user.php" class="list-group-item list-group--item-action" style=" text-align:center; border:none;width:240px;">User</a>
        </div>
    </div>
    <div class="card border-secondary col-md-9" style="border:groove; margin-top:0px; background-color:#FFFFFF; border-color:#CCCCCC; border-radius: 8px;">
        <table class="table table-responsive">
        <h1 style="margin-top:30px; font-family:Courier;"><b>All Question</b> <a href="#" style="float:right;"><button class="btn btn-success" style="font-size:20px; font-family:Verdana; background-color:#0066CC;">Ask Question</button></a></h1>


        <table class="table table-responsive">
        <?php
        include("db.php");  
        $aa=mysqli_query($con,"select * from question");
        while($a=mysqli_fetch_array($aa)){
?>
        <tr><td>
    <?php $pp=mysqli_query($con,"select * from answer where question='$a[4]'");
            $num_rows=mysqli_num_rows($pp);
            if(($num_rows)>0){
        ?>  <a href="display_see_answer.php?id=<?=$a[1]?>"><button class="btn btn-default" style="margin-top:10px; border-color:#009900;"><?=$num_rows?><br> Answer</button></a>
        <?php }
         else{
        ?>      
        <a href="display_see_answer.php?id=<?=$a[1]?>"><button class="btn btn-default" style="margin-top:10px; border:none;"><?=$num_rows?><br> Answer</button></a>
        <?php
                }
    ?>
            <a href="#"><button class="btn btn-default" style="margin-top:10px; border:none;"><?=$a[6]?><br>View</button></a>
    
        </td>
        <td style="font-size:24px; color:black; font-family:bold" colspan="4"><?=$a[4]?><br>
<?php       $rs=mysqli_query($con,"select * from user_question where full_description='$a[4]'");
            while($r=mysqli_fetch_array($rs)){
				$qq=mysqli_query($con,"select * from admin_category where category='$r[3]'");
				if($q=mysqli_fetch_array($qq)){
?>				<a href="category_question.php?id=<?=$q[1]?>"><button style="background-color:#99CCFF; font-size:18px;border-radius: 4px;" ><?=$r[3]?></button></a>   
<?php       	}
			}?></td><td><a href="sign.php?if_answer_submit_than_sign_up_first=1"> &nbsp;<button class="btn btn-danger" style="margin-top:17px;">Give Answer</button></a></td></tr>  
<?php   }?>
        </table></div>
         <div class="card border-secondary col-md-1" style="border:hidden; margin-top:0px; background-color:#FFFFFF;">
         <p style="margin-top:30px; font-family:Courier; font-size:24px;"><b></b></p>
         
    <?php 
            $aa=mysqli_query($con,"select * from admin_category where status=0");
            while($a=mysqli_fetch_array($aa)){
        ?>      <a href="category_question.php?id=<?=$a[1]?>" class="btn btn-default" style="background-color:#0099FF; color:#FFFFFF;"><?=$a[2]?></a><br> 
    <?php   }  ?></div>
        </div></div>
        <div class="row" style="height:300px; background-color:#666666;">
        <div class="jumbotron" style="background-color:#666666; color:#FFFFFF; margin-left:20px; margin-top:180px;">
        
       <b style="padding-left:1000px;"> Passionatley created by MAHENDRA RIYAD</b></div>      
        </div>
    </body>
</html>