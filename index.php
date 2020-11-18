<?php
include("include/header.php");
$link = mysqli_connect("localhost" , "root" , "" , "hotjok");

$query= "SELECT * FROM docs WHERE send!='checked' ORDER BY type DESC , id DESC";
$result = mysqli_query($link,$query);
$adad = 1;
while($row = mysqli_fetch_array($result)){

include("include/time.php");

	if($adad<=$NP){
		include("include/hedpost.php");
		include("include/fotpost.php");
	}
	$adad++;
}
mysqli_close($link);
include("include/footer.php");
?>
