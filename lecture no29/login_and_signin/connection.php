<?php 
$connection_status=mysqli_connect("localhost","root","","signin");

if ($connection_status) {
	//echo 'sir you are connected with database';
} else {
	echo 'no connect with database';
}





 ?>