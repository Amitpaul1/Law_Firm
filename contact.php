<?php
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $services = $_POST['services'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'chondro.pal@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Amitpal1'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('chondro.pal@gmail.com','Palcreativeltd'); // Gmail address which you used as SMTP server
    $mail->addAddress('palcreativeltd@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>PHONE : $phone <br>Service: $services<br> Message: $message</h3>";

    $mail->send();
    if($mail->send()){
		
		echo '<script type="text/javascript"> alert("Message Send Sucessfully") </script>';
		 echo "<script>location.href='contact.php'</script>";
	}
		else{
		
		echo '<script type="text/javascript"> alert("Message Send not Sucessfully ........") </script>';
		 echo "<script>location.href='contact.php'</script>";

	}
	}
   catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
  }

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Contact-us</title>
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

  <a class="navbar-brand" href="#">Puuni Law Firms,Inc</a>
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
<div class="contact-banner">
<h2 class="contact-heading">Schedule A Consultation!</h2>


</div>
<!---banner img end--->
<!---Contact Form--->
<div class="container">
<form action="" method="post">
<div class="row">
<div class="col-12 col-md-6">
<div class="form-group">
<input type="text" placeholder="Please type your name here" class="form-control" name="name"/>

</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<input type="text" placeholder="Please type valid email address" class="form-control" name="email"/>

</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<input type="text" placeholder="Please type 11 digit phone" class="form-control" name="phone"/>

</div>
</div>



<div class="col-12 col-md-6 mb-2">
<select class="custom-select" id="inlineFormCustomSelectPref" name="services">
    <option selected>I Need Help With...</option>
    <option value="Business Litigation" name="services-1">Business Litigation</option>
    <option value="Commercial Collections" name="services-2">Commercial Collections</option>
    <option value="Outside General Counsel Program" name="services-3">Outside General Counsel Program</option>
    <option value="Asset Protection" name="services-4">Asset Protection</option>
  </select>
</div>
<div class="col-12 col-md-12">
<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="06" placeholder="Please Type your message here" name="message"></textarea>
  </div>
  </div>


</div>
                          <h2 class="text-center">  <input type="Submit" class="btn btn-primary text-center btn-lg mb-4"  name="submit" value="Get Help Me"></h2>


</form>
</div>
<!---contact form end--->

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