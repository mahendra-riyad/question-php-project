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
<style>
ul#stack {
	position:fixed;
	top:0px;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow:hidden;
   background-color:#F8F8F8;
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

<style type="text/css">
	input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	
}
	input[type=email] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	
}
	input[type=password] {
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
.col-md-2 a{
background-color:#F8F8F8;
color:#333333;
}
.col-md-2 a:hover{
background-color:#7DBEFF;
}
</style>

</head>
<body style="background-color:#F8F8F8">
  <div class="w3-top">
  <div class="w3-bar w3-red">
  	<ul id="stack">
  <li id="stack" style="padding-left:600px;"><p style="text-align:center; font-family:Georgia; font-size:45px; color:black;" >Q<b style="color:#0000FF;">uestion</b></p></li>
</ul> </div></div>
<div class="row" style="margin-top:80px;">
	<div class="col-md-2">
	</div>
	<div class="card border-secondary col-md-8" style="border:1px groove #0099FF; border-color:#CCCCCC; border-radius:6px;">
 <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Login</a></li>
    <li><a data-toggle="pill" href="#menu1">Sign_up</a></li></ul>
	<div class="col-sm-3"></div>
		<div class="col-sm-6" style="margin-top:100px;">
		 <div class="tab-content">
<div id="home" class="tab-pane fade in active">
		<div class="panel panel-primary">
<div class="panel-heading" style="background-color:#CCCCCC;"><b style="font-family:Geneva; font-size:24px; color:#0099FF">Login</b></div>
		<div class="panel-body" style="background-color:#CCCCCC;">
		<div class="container" >
	<form method="post" action="login_check.php">
	<label style="color:#FFFFFF;">Email Id </label><input type="email" name="email_id" placeholder="Enter email..." required="required"><br><br>
	<label style="color:#FFFFFF;">Password</label><input type="password" name="password" placeholder="Enter password....."><br><br>
		<input type="submit" value="Login">
	</form></div></div></div>
	<table><tr><td style="padding-top:20px; text-align:center; padding-bottom:20px; font-size:16px;">
	<p>
	Don't have an account? <a href="sign.php" style="color:#3399FF;">Sign Up</a></p></td></tr></table>
	</div>
	 <div id="menu1" class="tab-pane fade">
	 <div class="panel panel-primary">
<div class="panel-heading" style="background-color:#CCCCCC;"><b style="font-family:Geneva; font-size:24px; color:#0099FF">Sign Up</b></div>
		<div class="panel-body" style="background-color:#CCCCCC;">
<form method="post" action="insert.php"  >
	        <label for="fname" style="color:#FFFFFF;">User Name</label>
			        <input type="text" id="fname" name="user_name" placeholder="Your name.."><br><br>
	  <label for="fname" style="color:#FFFFFF;">Email Id</label>
	 <input type="email" name="email_id" id="fname" placeholder="Enter email"><br><br>
<label for="password" style="color:#FFFFFF;">Password </label>
	<input type="password" name="password"  placeholder="Enter password" id="password"><br><br>
	<input type="submit" value="Sign Up">
</form></div></div>
<table><tr><td style="padding-top:20px; text-align:center; padding-bottom:20px; font-size:16px;">
	<p>
	Already have an account? <a href="login.php" style="color:#3399FF;">Login</a></p></td></tr></table></div></div></div>
</body>
</html>