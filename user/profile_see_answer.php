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
	 position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
	top:0px;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#f1f1f1;
}

li#stack {
    float: left;
}

li#stack a {
    display: block;
    color:#000000;
    text-align: center;
    padding: 24px 16px;
    text-decoration:none;
}

li#stack a:hover {
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
th {
    background-color:#0033FF;
    color: white;
	text-align:center;
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
<ul id="stack">
  <li id="stack" style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:#000000;">Q<b style="color:#0000FF;">uestion</b></p></li>
<?php 
	if(!isset($_COOKIE["user"])){
		header("location:login.php?invalid=1");
	}
	else{
		$email_id=$_COOKIE["user"];
		include("db.php");
		$aa=mysqli_query($con,"select * from user_register where email_id='$email_id'");
		if($a=mysqli_fetch_array($aa)){
?>			<li id="stack" style="font-family:Courier; font-size: 26px; float:right; padding-right:30px; padding-top:10px; color:#0033FF;">Profile:<b style="color:#0000FF"><?php echo $a[2]."<br>"; ?></b></li>
			</ul>
<?php	} ?></div></div>
<div class="row" style="margin-top:63px;">
    <div class="col-md-2">
        <div class="list-group">
        <a href="user_profile.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove; width:215px; background-color:#00B900; color:#FFFFFF; padding-left:30px;">Home</a>
        <a href="interested.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove;width:215px;  padding-left:30px;">Area of Interest</a>
        <a href="edit_profile.php" class="list-group-item list-group--item-action"style="border-bottom:1px groove;width:215px;  padding-left:30px;">Edit Profile</a>
        <a href="ask.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px;">Ask question</a>
        <a href="myquestion.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px;">My Question</a>
        <a href="interested_question.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px;">Interested Question</a>    
        <a href="logout.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px;">Logout</a>
        </div>
    </div>
    <div class="card border-secondary col-md-10" style="border:1px groove; border-color:#CCCCCC;">

<?php 
	if(!isset($_COOKIE["user"])){
		header("location:login.php?invalid=1");
	}
	else{
		$email_id=$_COOKIE["user"];
		
		include("db.php");
		$id=$_GET["id"];
		
		$sn=0;
		$rs=mysqli_query($con,"select max(sn) from question_visit");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn=$sn+1;
		
		//	count visitor	
			$count=0;
		$rs=mysqli_query($con,"select * from question_visit where email_id='$email_id'");
		while($r=mysqli_fetch_array($rs)){
			if($r["question_code"]==$id){
				$count++;
			}
		}
		if($count==0){
			mysqli_query($con,"insert into question_visit values($sn,'$id','$email_id',0)");
			mysqli_query($con,"update question set visit=visit+1 where code='$id'");
		}
		
		//
		
		
	
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
	?> 
		<form method="post" action="answer1.php?id=<?=$id?>" style="margin-top:20px;">
				<textarea name="answer" cols="110" rows="6" placeholder="Enter answer..."></textarea>
				<input type="submit" value="Your Post" class="button button1">
		</form>
<?php	}
 ?>
	<?php
	}
	
?>
</body></html>