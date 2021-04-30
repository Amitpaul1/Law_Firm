<?php
error_reporting(0);
include_once'config.php';

$sql="SELECT * FROM `home`";
$res=$pdo->query($sql);

foreach($res as $value){



?>





<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $value['1'];?></title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<!----header--->
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container">

  <a class="navbar-brand" href="#">Pal Law Firms,Inc</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pratice Areas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="businee-litigation.php">Business Litigation</a>
          <a class="dropdown-item" href="commercial-collections.php">Commercial Collections</a>
          <a class="dropdown-item" href="outside-general.php">Outside General Counsel Services</a>
          <a class="dropdown-item" href="asset-general.php">Asset Protection</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="meet.php">Meet Our Team</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
	
	
	</div>
	</nav>
<!----header end--->
	<!----Hero--->
	<div class="img">
<div class="a">
<h2><?php echo $value['3']?></h2>
<h3><?php echo $value['4']?></h3>
    <p class="button"><a href="">SCHEDULE A CONSULTATION</a></p>
</div>
</div>

	
	<!---hero end--->
	<!-----About--->
	<div class="container">
	
	
	<h1><?php echo $value['5']?></h1>
	<p class="about-p"><?php echo $value['6']?></p>
	<p class="about-p"><?php echo $value['7']?></p>

	<?php 
}?>
	
	</div>
		<!-----About end--->
				<!-----services--->

<div class="contaier">
<h2 class="container-service">How can we <span class="help">HELP</span> you?</h2>
<div class="row">

<div class=" col-12 col-md-3">
	<div class="card">
	<div class="card-body mb-4">
	<h3 class="card-title">Business Litigation</h3>
	<p class="card-text text-justify">Operating a business requires significant work, diligence, and dedication. When running a business, it becomes clear that there are many components to its structure</p>
	
	</div>
	</div>
	</div>
<div class="col-12 col-md-3">
	<div class="card">
	<div class="card-body mb-4">
	<h3 class="card-title">Commercial Collections</h3>
	<p class="card-text text-justify">Many businesses are given the difficult task of collecting old debts that are owed to them. It is, however, completely within their legal right to seek repayment of . And, as a person</p>
	
	</div>
	</div>
	</div>
	<div class=" col-12 col-md-3">
	<div class="card">
	<div class="card-body mb-4">
	<h3 class="card-title">Outside General Counsel Services</h3>
	<p class="card-text text-justify">If you are a business owner, you know how important it is to have your business operating smoothly in terms of overall legal matters and compliance. And, as a person</p>
	
	</div>
	</div>
	</div>
	<div class="col-12 col-md-3">
	<div class="card mr-4">
	<div class="card-body mb-4 ">
	<h3 class="card-title">Asset Protection</h3>
	<p class="card-text text-justify">Businesses are risky. They can be susceptible to legal lawsuits, complaints, and claims. Therefore, a business owner must always be one step ahead and plan for unexpected</p>
	
	</div>
	</div>
	</div>


</div>


</div>
	<!---services end--->
	<?php
	
	include_once'config.php';
	$sql="SELECT * FROM `client`";
	$res=$pdo->query($sql);
	$li='';
	$div='';
	$i='';
	foreach($res as $value){
		
		if($i==0){
		$li.='    <li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="active"></li>
';	
	$div.=' <div class="carousel-item active">
     <p class="py-3">'.$value['Client_reviews'].'</p>
    <h3 class="py-1 my-1">'.$value['client_name'].'</h3>
	</div>';		
			
		}
		else{
			$li.='    <li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>
';	
			$div.=' <div class="carousel-item">
     <p class="py-3">'.$value['Client_reviews'].'</p>
    <h3 class="py-1 my-1">'.$value['client_name'].'</h3>
	</div>';
			
		}
		$i++;
		
		
	}
	
	
	
	
	?>
	<!----testimonai--->
	<div class="container-testimonai">
	<h2>Client Testimonials</h2>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
    <?php echo $li;?>
  </ol>
  <div class="carousel-inner">
   <?php echo $div;?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	
	
	</div>
</div>
	
	
	
		<!----testimonai END--->
        <!---footer----->
	<div class="container-footer">
	<div class="row">
	<div class="col-md-4 mb-3">
	<h3 >COMPANY INFO</h3>
	<hr />
	<h4 class="footer-body">7th Grand Floor,26/2 Juginagar Lan Wari,Dhaka-1203</h4>
	<h5 class="footer-body">Phone:01635115547</h5>
	<h5 class="footer-body">FAX:214.749.6100</h5>
	<h5 >Email:punni007@hotmail.com</h5>
	
	
	
	</div>
	<div class="col-md-4 mb-3">
	<h3>QUICK LINKS</h3>
	<hr />
	<a href="">Home</a><br>
	<a href="">About Us</a><br>
	<a href="">Practice Areas</a><br>
	<a href="">Meet Our Team</a><br>
	<a href="">Contact Us</a>
	
	
	
	</div>
	
	<div class="col-md-4 mb-3">
	<h3>PRACTICE AREAS</h3>
	<hr />
	<a href="" class="">Business Litigation</a><br>
	<a href="">Commercial Collections</a><br>
	<a href="">Outside General Counsel Services</a><br>
	<a href="">Asset Protection</a>	
	
	
	</div>
	
	</div>
	
	
	
	</div>
	
	</body>
</html>