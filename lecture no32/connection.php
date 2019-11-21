<?php 

$connection_status=mysqli_connect('localhost','root','','prepared_db');
if ($connection_status) {
	
} else {
	echo 'sir connected with database';
}


 ?>