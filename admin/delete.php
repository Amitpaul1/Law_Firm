
<?php
error_reporting(0);
require_once "config.php";
$id=$_GET['id'];
$sql="DELETE FROM `client` WHERE id=:id";
$result=$pdo->prepare($sql);
$result->bindparam(':id',$id);
$result->execute();
if($result){
	echo '<script type="text/javascript"> alert("DELETE succsfully...") </script>';
		 echo "<script>location.href='Home.php'</script>";
	
	
}
else{
	echo "DELETE not sucessfully";
	
}





?>