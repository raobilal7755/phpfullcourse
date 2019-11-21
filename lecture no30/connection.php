<?php 

$connection_status=mysqli_connect("localhost","root","","prepared_db");
if (!$connection_status) {
	echo 'sir you are not connected to database';
} else {
	//echo 'sir you are connected with database';
}



 ?>