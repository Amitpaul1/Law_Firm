<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
error_reporting(0);
include_once'config.php';
$sql="SELECT * FROM `business_litigation`";
$res=$pdo->query($sql);
foreach($res as $value){
?>
	<meta charset="UTF-8">
	<title><?php echo $value['1']?></title>
	
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
<!---banner img--->
<div class="about-banner">
<h2 class="business-heading"><?php echo $value['1'];?></h2>


</div>
<!---banner img end--->

<!---description--->
<div class="container">

<p class="business-p"><?php echo $value['2'];?></p>
</div>

<!---description end--->
<!---Contact Form--->
<div class="container">
<form action="">
<div class="row">
<div class="col-12 col-md-6">
<div class="form-group">
<input type="text" placeholder="Please type your name here" class="form-control"/>

</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<input type="text" placeholder="Please type valid email address" class="form-control"/>

</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<input type="text" placeholder="Please type 11 digit phone" class="form-control"/>

</div>
</div>



<div class="col-12 col-md-6 mb-2">
<select class="custom-select" id="inlineFormCustomSelectPref">
    <option selected>I Need Help With...</option>
    <option value="1">Business Litigation</option>
    <option value="2">Commercial Collections</option>
    <option value="3">Outside General Counsel Program</option>
    <option value="4">Asset Protection</option>
  </select>
</div>
<div class="col-12 col-md-12">
<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="06" placeholder="Please Type your message here"></textarea>
  </div>
  </div>


</div>
<div class="text-center mb-4">
<button class="btn btn-primary btn-lg">GET HELP NOW</button>

</div>

</form>
</div>
<!---contact form end--->
<!---Description ---->
<div class="container pt-2">
<h3><?php echo $value['3'];?>
</h3>
<p class="business-des"><?php echo $value['4'];?></p>
<p class="business-des"><?php echo $value['5'];?></p>
<p class="business-des"><?php echo $value['6'];?></p>
<h4 class="business-h4"><?php echo $value['7'];?></h4>
<p class="business-des"><?php echo $value['8'];?></p>
<h4 class="business-h4"><?php echo $value['9'];?></h4>
<p class="business-des"><?php echo $value['10'];?></p>
<h4 class="business-h4"><?php echo $value['11'];?></h4>
<p class="business-des"><?php echo $value['12'];?></p>
<h4 class="business-h4"><?php echo $value['13'];?></h4>
<p class="business-des"><?php echo $value['14'];?></p>

<?php
}?>
</div>
<!----Description end-->
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