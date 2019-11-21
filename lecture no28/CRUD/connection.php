<?php 

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","php");

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
if ($connection) {
	// echo 'sir you are connected with database<br>';
} else {
	echo 'sir no connect with database'.mysqli_connect_error();
}


/*$query="CREATE DATABASE php";
$result=mysqli_query($connection,$query);
if ($result) {
	echo 'sir database created successfully';
} else {
	echo 'no database create';
}*/


/*$query="CREATE TABLE student(
id INT(10) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(20) NOT NULL,
email VARCHAR(30) NOT NULL,
address VARCHAR(20) NOT NULL

)";

$result=mysqli_query($connection,$query);
if ($result) {
	echo 'sir table created successfully';
} else {
	echo 'sir no table created'.mysqli_error($connection);
}*/

 ?>