<?php 

$connection_status=mysqli_connect("localhost","root","","loginandsignin");
if ($connection_status) {
	//echo 'sir you are connected to database';
} else {
	echo 'sir you are not connected to database';
}






 ?>