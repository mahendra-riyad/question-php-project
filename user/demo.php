<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#d1
		{
			display: none;
		}
	</style>
	<script type="text/javascript">
		function any(argument) 
		{
			document.getElementById('button').innerText="changed";
		}
	</script>
	<title></title>
</head>
<body>
	
<?php
echo "<div id='d1'>Hey</div>";
echo "<button id='button' onclick='any()'>Click</button>";
?>
</body>
</html>