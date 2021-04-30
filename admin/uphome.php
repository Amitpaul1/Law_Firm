<?php

include_once'config.php';
if(isset($_POST['save'])){
	$title=$_POST['title'];
	$hero_img=$_FILES["profile"]["name"];
	$hero_tmp=$_FILES["profile"]["tmp_name"];
	$folder="../img/".$hero_img;
    $r=move_uploaded_file($hero_tmp,$folder);
	$hero_title=$_POST['hero_title'];
	$hero_subtitle=$_POST['hero_subtitle'];
	$about_title=$_POST['about_title'];
	$about_description=$_POST['about-des'];
	$about_description1=$_POST['about-des1'];
	
	$sql="UPDATE `home` SET `Title`='$title',`Hero_img`='$folder',`Hero_title`='$hero_title',`Hero-subtitle`='$hero_subtitle',`About_title`='$about_title',`About_des`='$about_description',`About_des1`='$about_description1'";
	$result=$pdo->query($sql);
	if($result){
		echo '<script type="text/javascript"> alert("Update succsfully...") </script>';
		 echo "<script>location.href='Home.php'</script>";
		
	}
	else{
		
		echo '<script type="text/javascript"> alert("Update not succsfully ........") </script>';
		 echo "<script>location.href='Home.php'</script>";
		
	}
}
























?>