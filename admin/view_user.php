<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#0033FF;
    color: white;
}
</style>
<script type="text/javascript">
	$(document).on("click",".btn.btn-danger",function(){
			var v=$(this).attr("id");
			$.post("status.php",{id:v},function(data){
				if(data=="success"){
					//$("#r"+v).fadeOut(1000);
					//$("#a"+v).fadeIn(1000);
				}
			});
		});
</script>

</head>
<body>
	<div>
	<table class="table table-responsive">		
		<tr><th>profile name</th><th>email id</th><th>status</th><th>block box</th><th>Question</th></tr>
<?php 
	include("db.php");
	$rs=mysqli_query($con,"select * from user_register");
	while($r=mysqli_fetch_array($rs)){
?>
		<tr><td><?=$r[2]?></td><td><?=$r[3]?></td><td><?=$r[5]?></td><td id="r<?=$r[1]?>"><button class="btn btn-danger" id="<?=$r[1]?>">block</button></td><td>
			<a href="user_question.php?id=<?=$r[3]?>"><button>view_question</button></a></td></tr>
	
<?php
	} ?>
	</table></div>
</body>