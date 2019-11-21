<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'rao');

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
if ($connection) {
	//echo 'sir you are connection to database';
} else {
	echo 'no connect data'.mysqli_connect_error();
}


// $database="CREATE DATABASE raoo";

// $query=mysqli_query($connection,$databas);
// if ($query) {
// 	echo 'sir database created';
// } else {
// 	// mysqli_error($connection);
// 	echo 'sir no created database';
// }

/*$create_tb="CREATE TABLE student(
ID INT(10) PRIMARY KEY AUTO_INCREMENT,
Name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL

)";

$query=mysqli_query($connection,$create_tb);
if ($query) {
	echo 'sir create table successfully';
} else {
	echo 'sir no table created'.mysqli_error($connection);
}*/



// $insert_data="INSERT INTO student(ID,Name,email,address) VALUES(1,'bilal','bilal@gmail.com','Bahawalpur')";

// $query=mysqli_query($connection,$insert_data);

// if ($query) {
// 	echo 'sir data will be inser successfully';
// } else {
// 	echo 'sir no data insert..';
// }








 ?>