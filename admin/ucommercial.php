<?php
error_reporting(0);

include_once'config.php';
if(isset($_POST['submit'])){
	
	$banner_title=$_POST['title'];
	$description=$_POST['about-des'];
	$description1=$_POST['about-des1'];
		$H1=$_POST['h1'];
	$description2=$_POST['about-des2'];
	$description3=$_POST['about-des3'];
	$description4=$_POST['about-des4'];

	
	$sql="UPDATE `commercial_collection` SET `title`='$banner_title',`Description1`='$description',`Description2`='$description1',`H1`='$H1',`Description3`='$description2',`Description4`='$description3',`Description5`='$description4'";
	$result=$pdo->query($sql);
	if($result){
		echo '<script type="text/javascript"> alert("Update succsfully...") </script>';
				 echo "<script>location.href='adcommercial.php'</script>";

	}
	else{
		
		echo '<script type="text/javascript"> alert("Update not succsfully ........") </script>';
		 echo "<script>location.href='adabout.php'</script>";
		
	}
}
























?>