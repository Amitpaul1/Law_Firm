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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
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
					<span>Asset General</span>
			</ul>
			<?php
			include_once'config.php';
			$sql="SELECT * FROM `asset_protectin`";
			$res=$pdo->query($sql);
			foreach($res as $value){
			?>
			<form action="upasset.php" method="post">
			
			<div class="form-group col-md-10">
      <label for="name">Banner Title</label>
      <input type="text" name="title" value="<?php echo $value['1']?>" class="form-control" id="name">
	  </div>
	  <div class="form-group col-md-10">
      <label for="name">Descrption Part-1</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="business-des" rows="6"><?php echo $value['2']?></textarea>
	      </div>
	  <div class="form-group col-md-10">
      <label for="name">H1</label>
      <input type="text" name="h1" value="<?php echo $value['3']?>" class="form-control" id="name">
	  </div>
	  
	  <div class="form-group col-md-10">
      <label for="name">Descrption Part-2</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="business-des1" rows="6"><?php echo $value['4']?></textarea>
	      </div>
	  <div class="form-group col-md-10">
      <label for="name">Descrption Part-3</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="business-des2" rows="6"><?php echo $value['5']?></textarea>
	      </div>
	   <div class="form-group col-md-10">
      <label for="name">Descrption Part-4</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="business-des3" rows="6"><?php echo $value['6']?></textarea>
	      </div>
	  <div class="form-group col-md-10">
      <label for="name">H2</label>
      <input type="text" name="h2" value="<?php echo $value['7']?>" class="form-control" id="name">
	  </div>
	  <div class="form-group col-md-10">
      <label for="name">Descrption Part-5</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="business-des4" rows="6"><?php echo $value['8']?></textarea>
	      </div>
		   <div class="form-group col-md-10">
      <label for="name">H3</label>
      <input type="text" name="h3" value="<?php echo $value['9']?>" class="form-control" id="name">
	  </div>
		  <div class="form-group col-md-10">
      <label for="name">Descrption Part-6</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="business-des5" rows="6"><?php echo $value['10']?></textarea>
	      </div>
		  
		  
		  
	  <?php
			}?>
			
			
			
			
			
			
			<input type="submit" class="btn btn-primary btn-lg mt-2 mb-4" name="submit" value="Save" />
			
			</form>
			</div>
</div>
</div>
</body>
</html>
</html>