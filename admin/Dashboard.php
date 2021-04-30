<?php
error_reporting(0);
session_start();
$r=$_SESSION['email'];
if($r==true){}
else{
	header('location:login.php');
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="Scss/style.css" />
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style type="text/css">

.row .card .card-header h2{
	font-size:72px;
	
	
}
.card-header h4{
	
		font-size:22px;

}

</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">Pal Creative Ltd</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
	  <a href="" class="nav-link"><i class="fas fa-user"></i>Profile</a>
	  </li>
	  <li class="nav-item">
	  <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
	  </li>
    </ul>
	
  </div>
</nav>
 <div class="info"><script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <ul>
            <li><a href="Dashboard.php"><i class="fas fa-list"></i>Dashboard</a></li>
            <li><a href="Home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="adabout.php"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="adbusiness.php"><i class="fas fa-project-diagram"></i>Business Litigation</a></li>
            <li><a href="adcommercial.php"><i class="fas fa-project-diagram"></i>Commercial-Collection</a></li>
            <li><a href="adoutside_general.php"><i class="fas fa-project-diagram"></i>Outside-general</a></li>
            <li><a href="asset_general.php"><i class="fas fa-project-diagram"></i>Asset-General</a></li>
            <li><a href="admeet.php"><i class="fas fa-users"></i>Meet Team</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
	<!----main--->
    <div class="main_content mr-4">
	<ul class="breadcrumb">
				<li>
					<i class="fas fa-home"></i>
					<span>Home</span>
					<i class="fas fa-angle-right"></i>
				</li>
					<span>Dashboard</span>
			</ul>
			<div class="row">
			<div class="col-md-4">
			<div class="card">
			<div class="card-header bg-primary text-white">
			<h2><i class="fas fa-user" aria-hidden="true">
			1</i></h2>
			<h4 class="card-title">User</h4>
			</div>
			<div class="card-footer">
		<i class="fa fa-arrow-right pull-right">	<a href="">View details</a></i>
			
			
			
			</div>
			</div>
			
			
			</div>
			<div class="col-md-4">
			<div class="card">
			<div class="card-header bg-primary text-white">
			<h2><i class="fas fa-users" aria-hidden="true">
			10</i></h2>
			<h4 class="card-title">Total Visitor</h4>
			</div>
			<div class="card-footer">
			<i class="fa fa-arrow-right pull-right"><a href="">View details</a></i>
			
			
			
			</div>
			</div>
			
			
			</div>
			<div class="col-md-4">
			<div class="card">
			<div class="card-header bg-primary text-white">
			<h2><i class="fas fa-envelope">
			1</i></h2>
			<h4 class="card-title">Message</h4>
			</div>
			<div class="card-footer">
			<i class="fa fa-arrow-right pull-right"><a href="">View details</a></i>
			
			
			
			</div>
			</div>
			
			
			</div>
			
			
			
			</div>
</div>
    </div>
    </div>
</div>
</body>
</html>