<?php
include_once'config.php';
if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$descrption=$_POST['business-des'];
	$title1=$_POST['title1'];
	$descrption2=$_POST['business-des1'];
	$descrption3=$_POST['business-des2'];
	$descrption4=$_POST['business-des3'];
	$h2=$_POST['h2'];
	$descrption5=$_POST['business-des4'];
	$h3=$_POST['h3'];
	$descrption6=$_POST['business-des5'];
	$h4=$_POST['h4'];
	$descrption7=$_POST['business-des6'];
	$h5=$_POST['h5'];
	$descrption8=$_POST['business-des7'];
	
	$sql="UPDATE `business_litigation` SET `Title`='$title',`Description`='$descrption',`h1`='$title1',`Description2`='$descrption2',`Description3`='$descrption3',`Description4`='$descrption4',`h2`='$h2',`Description5`='$descrption5',`h3`='$h3',`Description6`='$descrption6',`h4`='$h4',`Description7`='$descrption7',`h5`='$h5',`Description8`='$descrption8'";
	$res=$pdo->query($sql);
	
	if($res){
		
		echo '<script type="text/javascript"> alert("Update succsfully...") </script>';
		 echo "<script>location.href='adbusiness.php'</script>";
		
	}
	else{
		
		echo '<script type="text/javascript"> alert("Update not succsfully ........") </script>';
		 echo "<script>location.href='adbusiness.php'</script>";
		
	}
		
		
		
	
}








?>
