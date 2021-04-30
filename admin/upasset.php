<?php

include_once'config.php';
if(isset($_POST['submit'])){
	
	$banner_title=$_POST['title'];
	$description=$_POST['business-des'];
		$H1=$_POST['h1'];
			$description1=$_POST['business-des1'];
	$description2=$_POST['business-des2'];
	$description3=$_POST['business-des3'];
		$H2=$_POST['h2'];
      	$description4=$_POST['business-des4'];
				$H3=$_POST['h3'];
                    	$description5=$_POST['business-des5'];

	
$sql="UPDATE `asset_protectin` SET `Title`='$banner_title',`Description1`='$description',`H1`='$H1',`Description2`='$description1',`Description3`='$description2',`Description4`='$description3',`H2`='$H2',`Description5`='$description4',`H3`='$H3',`Description6`='$description5'";
$result=$pdo->query($sql);
	if($result){
		echo '<script type="text/javascript"> alert("Update succsfully...") </script>';
				 echo "<script>location.href='asset_general.php'</script>";

	}
	else{
		
		echo '<script type="text/javascript"> alert("Update not succsfully ........") </script>';
		 echo "<script>location.href='adabout.php'</script>";
		
	}
}













?>