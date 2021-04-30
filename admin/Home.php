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
					<span>Dashboard</span>
					<i class="fas fa-angle-right"></i>
				</li>
					<span>Home</span>
			</ul>
			<?php
			include_once'config.php';
			$sql="SELECT * FROM `home`";
			$res=$pdo->query($sql);
			foreach($res as $value){
			?>
			<form action="uphome.php" method="post" enctype="multipart/form-data">
			 <div class="form-group col-md-10">
      <label for="name">Website Title</label>
      <input type="text" name="title" value="<?php echo $value['1']?>" class="form-control" id="name">
	  </div>
	  <div class="form-group col-md-10">
  <img src="<?php echo $value['2'];?>" width="150" height="150" alt="ccaa" class="mb-2"/>
  <label>Hero Image</label>
  <div class="custom-file">
    <input type="file" name="profile" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Choose Profile Pic...</label>
  </div></div>
	  <div class="form-group col-md-10">
      <label for="name">Hero-section Title</label>
      <input type="text" name="hero_title" value="<?php echo $value['3']?>" class="form-control" id="name">
	      </div>
<div class="form-group col-md-10">
      <label for="name">Hero-section SubTitle</label>
      <input type="text" name="hero_subtitle" value="<?php echo $value['4']?>" class="form-control" id="name">
	      </div>
	  
	  <div class="form-group col-md-10">
      <label for="name">About-section Title</label>
      <input type="text" name="about_title" value="<?php echo $value['5']?>" class="form-control" id="name">
	      </div>
	  <div class="form-group col-md-10">
      <label for="name">About-section Descrption Part-1</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="about-des" rows="5"><?php echo $value['6']?></textarea>
	      </div>
	   <div class="form-group col-md-10">
      <label for="name">About-section Descrption Part-2</label>
	      <textarea class="form-control" id="exampleFormControlTextarea1" name="about-des1" rows="5"><?php echo $value['7']?></textarea>
	      </div>
	  
	  
	  
	  
	  
	  
			<?php }?>
    
			  <input type="submit" name="save" class="btn btn-primary btn-lg mb-4" value="Save Changes">

			
			
			
			
			
			
			
			</form>
			<table class="table">
            <tr>
	
		
		
		</tr>
		<tr>
		<th>Client Name</th>
		<th>Client Reviews</th>
        <th>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">
Add</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
		<div class="row">
		<div class="col-12 col-10">
		<div class="form-group">
		<input type="text" class="form-control mb-4" placeholder="Enter your client name" name="client_name" required>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="03" placeholder="Please Type your client Reviews" name="client_reviews"required></textarea>

		</div>
		</div>
		</div>
		
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input type="submit" class="btn btn-secondary" name="submit" value="ADD" />
				</form>

      </div>
    </div>
  </div>
</div>
		<!----insert--->
		<?php
		include_once 'config.php';
		if(isset($_POST['submit'])){
			
			$client_name=$_POST['client_name'];
			$client_reviews=$_POST['client_reviews'];
			
			$sql="INSERT INTO `client`(`client_name`, `Client_reviews`) VALUES ('$client_name','$client_reviews')";
			$result=$pdo->query($sql);
			
			if($result){
				
				echo "Add sucessfully";
			echo "<script>location.href='Home.php'</script>";
				
				
			}
			else{
								echo "Add not sucessfully";

				
			}
			
		}
		
		
		
		
		
		?>
		
		
		</th>
		</tr>
		<?php
		
		include_once 'config.php';
		$sql="SELECT * FROM `client`";
		$res=$pdo->query($sql);
		foreach($res as $value){
			
		?>
		<tr>
		
		<td><?php echo $value['1'];?></td>
		<td><?php echo $value['2'];?></td>
		<td>	<?php echo "<a href='Delete.php?action=delete&id=".$value['0']."'>Delete</a>"?>
</td>
		<?php
		}?>
		</tr>
		</table>	
			</div>
			
			
			</div>
			
			
</div>
    
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>