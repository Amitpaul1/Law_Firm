<?php
session_start();
include_once('config.php');
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$email=filter_var($email,FILTER_SANITIZE_STRING);
	$_SESSION['email']=$_POST['email'];
	$password=$_POST['password'];
	$password=filter_var($password,FILTER_SANITIZE_STRING);

	$login_user="SELECT * FROM `user` WHERE `Email`='$email' AND `Password`='$password'";
	$res=$pdo->prepare($login_user);
$res->execute();

	if($res->rowCount()>0){
		echo '<script type="text/javascript"> alert("you are login") 
</script>';
	header('location:Dashboard.php');

	
}
else{
	echo '<script type="text/javascript"> alert("Email and Password are wrong") 
	</script>';
	
	
		
}
		
		
		
	}
	
	









?>













<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
	h2{
		margin-top:50px;
		font-size:60px;
		text-align:center;
		
	}
	.form-container{
		background:#fff;
	padding:30px;
	border-redius:10px;
	box-shadow:0px 0px 10px 0px;
	margin-top:100px;
	}
	body{
		
		background-image:url(../img/a.jpg);
		background-repeat: no-repeat;
		background-position: center;
		background-size:cover;
		
	}
	</style>
</head>
<body>
<div class="container">
	<h2 class="text-white">Admin login</h2>
	<div class="row justify-content-center">
	<div class="col-12 col-md-3 col-sm-3" >
	<form action="" method="post" class="form-container">
	<div class="form-group">
	<label for="">Email</label>
	<input type="text" class="form-control" name="email" placeholder="Enter your Email" required />
	</div>
	<div class="form-group">
		<label for="">Password</label>
	<input type="password" class="form-control" name="password" placeholder="Enter your Password" required />
	</div>
                            <input type="Submit" class="form-control"  name="submit" value="login">
	</form>
	
	
	</div>
	
	</div>
	</div>
</body>
</html>