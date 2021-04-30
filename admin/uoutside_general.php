<?php

include_once'config.php';
if(isset($_POST['submit'])){
	$banner_title=$_POST['title'];
	$description=$_POST['about-des'];
	$description1=$_POST['about-des1'];
		$H1=$_POST['h1'];
	$description2=$_POST['about-des2'];
	$H2=$_POST['h2'];
	$description3=$_POST['about-des3'];
		$H3=$_POST['h3'];
	$description4=$_POST['about-des4'];
	$description5=$_POST['about-des5'];


	
	$sql="UPDATE `outside_general` SET `Banner_title`='$banner_title',`Description1`='$description',`Description2`='$description1',`H1`='$H1',`Description3`='$description2',`H2`='$H2',`Description4`='$description3',`H3`='$H3',`Description5`='$description4',`Description6`='$description5'";
	$result=$pdo->query($sql);
	if($result){
		echo '<script type="text/javascript"> alert("Update succsfully...") </script>';
				 echo "<script>location.href='adoutside_general.php'</script>";

	}
	else{
		
		echo '<script type="text/javascript"> alert("Update not succsfully ........") </script>';
		 echo "<script>location.href='adoutside_general.php'</script>";
		
	}
}
























?>