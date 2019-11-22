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
</style>
<style>
input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email]:focus {
    background-color: lightblue;
}
input[type=password]:focus {
    background-color: lightblue;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.form {
    padding: 20px;
	margin-top:200px;
}
</style>

</head>
<body>
 <div class="w3-top">
  <div class="w3-bar w3-red">
	<ul>
  <li style="padding-left:20px;"><p style="text-align:center; font-family:Georgia; font-size:36px; color:black;" >Q<b style="color:#0000FF;">uestion</b></p></li>
  <li style="float:right; margin-right:10px;"><p style="text-align:center; font-family:Courier; font-size:36px; color:#000099;">Admin Panel</p></li>
  </ul></div></div>
<div class="form">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="panel panel-primary">
<div class="panel-heading" style="background-color:#CCCCCC;"><b style="font-family:Geneva; font-size:24px; color:#0099FF">Login</b></div>
						<div class="panel-body">

<form method="post" action="check0.php">
	<label>Email Id</label>
	<input type="email" name="email" required="required" placeholder="Enter Your Email....">
	<label>Password</label>
	<input type="password" name="password" placeholder="Enter Password.....">
	<input type="submit" value="Login">
</form></div></div></div></div><div class="col-sm-3"></div></div>
</body>
</html>
