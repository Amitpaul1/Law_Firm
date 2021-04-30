<?php

include_once'config.php';
if(isset($_POST['save'])){
	$title=$_POST['title'];
	$banner_title=$_POST['img_title'];
	$description=$_POST['about-des'];
	$description1=$_POST['about-des1'];
		$H3=$_POST['h3'];
	$description2=$_POST['about-des2'];
	$description3=$_POST['about-des3'];

	
	$sql="UPDATE `about` SET `Title`='$title',`Img_title`='$banner_title',`Description1`='$description',`Description2`='$description1',`h3`='$H3',`Description3`='$description2',`Description4`='$description3'";
	$result=$pdo->query($sql);
	if($result){
		echo '<script type="text/javascript"> alert("Update succsfully...") </script>';
				 echo "<script>location.href='adabout.php'</script>";

	}
	else{
		
		echo '<script type="text/javascript"> alert("Update not succsfully ........") </script>';
		 echo "<script>location.href='adabout.php'</script>";
		
	}
}
























?>