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
	z-index:1;
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
    transition:1s;
    background-color:#3366FF;
	color:#FFFFFF;
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
<?php		}
		$count=0;
?>		<div class="row" style="margin-top:0px;">
    <div class="col-md-2">
       <div class="list-group">
        <a href="user_profile.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove; width:215px; padding-left:30px;">Home</a>
        <a href="interested.php" class="list-group-item list-group--item-action"  style="border-bottom:1px groove;width:215px;  padding-left:30px;">Area of Interest</a>
        <a href="edit_profile.php" class="list-group-item list-group--item-action"style="border-bottom:1px groove;width:215px;  padding-left:30px;">Edit Profile</a>
        <a href="ask.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px;">Ask question</a>
        <a href="myquestion.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px; background-color:#00B900; color:#FFFFFF;">My Question</a>
        <a href="interested_question.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px;">Interested Question</a>    
        <a href="logout.php" class="list-group-item list-group--item-action" style="border-bottom:1px groove;width:215px;  padding-left:30px;">Logout</a>
        </div>
    </div>
    <div class="card border-secondary col-md-10" style="border:1px groove; border-color:#CCCCCC;">
		<h1 style="margin-top:30px; font-family:Courier;">My Question</h1>
		<table class="table table-responsive">

<?php
		$aa=mysqli_query($con,"select * from question where email_id='$email_id'");
		while($a=mysqli_fetch_array($aa)){
			$count++;
	?>		<tr><td>
			<?php $pp=mysqli_query($con,"select * from answer where question='$a[4]'");
			$num_rows=mysqli_num_rows($pp);
			if(($num_rows)>0){
		?>	<a href="see_answer.php?id=<?=$a[1]?>"><button class="btn btn-default" style="margin-top:10px; border-color:#009900;background-color:#F9F9F9;"><?=$num_rows?><br> Answer</button></a>
		<?php }
		 else{
		?>		
		<a href="see_answer.php?id=<?=$a[1]?>"><button class="btn btn-default" style="margin-top:10px; border:none;background-color:#F9F9F9;"><?=$num_rows?><br> Answer</button></a>
		<?php
				}
	?> 
			</td><td><a href="#"><button class="btn btn-default" style="margin-top:10px; border:none;background-color:#F9F9F9;"><?=$a[6]?><br>View</button></a>
			

	</td>
	<td>
			<?php 
				$counter=0;
				$qq=mysqli_query($con,"select * from question_like where (question_code='$a[1]') AND status=0");
				$count = mysqli_num_rows($qq);
			?>	
				<?php
				$qa=mysqli_query($con,"select * from question_like where (question_code='$a[1]') AND status=0 AND email_id='$email_id'");
				if($q=mysqli_fetch_array($qa)){
					
			?>			<a href="#"><button class="btn btn-default" style="border-color:#66CC99;"><b style="font-size:16px; color:#00CC66;"><?=$count?></b> Liked</button></a>
			<?php 
					} 
					else{
					
					?><a href="like.php?id=<?=$a[1]?>"><button class="btn btn-default" id="like" style="border:none;"><b style="font-size:16px; color:#00CC66;"><?=$count?></b> Like</button></a><br> <?php	
					}  								
				
?>
		
			<?php 
				$counter=0;
				$qq=mysqli_query($con,"select * from question_dislike where (question_code='$a[1]') AND status=0");
				$count = mysqli_num_rows($qq);
			?>	
				<?php
				$qa=mysqli_query($con,"select * from question_dislike where (question_code='$a[1]') AND status=0 AND email_id='$email_id'");
				if($q=mysqli_fetch_array($qa)){
					
			?>			<a href="#"><button class="btn btn-default" style="border-color:#66CC99; margin-top:5px;"><b style="font-size:16px; color:#990000;"><?=$count?></b> Disliked</button></a>
			<?php 
					} 
					else{
					
					?><a href="dislike.php?id=<?=$a[1]?>"><button class="btn btn-default" id="like" style="border:none;margin-top:5px;"><b><?=$count?></b> Dislike</button></a> <?php	
					}  								
				
?>	
		</td>
		
		<td style="font-size:24px; color:#0033FF;" colspan="4"><?=$a[4]?><br>
	<?php
			$ap=mysqli_query($con,"select * from user_question where full_description='$a[4]'");
			while($p=mysqli_fetch_array($ap)){
	?>   <button style="background-color:#99CCFF; font-size:18px; border-radius:8px;"><?=$p[3]?></button>
	<?php		}
?>		</td></tr>	
<?php		}
		
	}
 ?>
 </body>
 </html>