<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<?php 
	if(!isset($_COOKIE["user"])){
		header("login.php?cookie=1");
	}
	else{
		$email_id=$_COOKIE["user"];
		$question=$_GET["question"];
?>
		<form method="post" action="answer2.php?question=<?=$question?>">
				<textarea name="answer" cols="200" rows="5" placeholder="Enter answer..."></textarea>
				<input type="submit" value="Answer Submit">
		</form>
<?php	}
 ?>
</body>
</html>