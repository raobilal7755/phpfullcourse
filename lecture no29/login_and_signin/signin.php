<?php 
session_start();

include "connection.php";

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];

$query="SELECT * FROM signin WHERE name='$name' AND password='$password'";

$result=mysqli_query($connection_status,$query);
$rows_match=mysqli_num_rows($result);
if ($rows_match==1) {
	echo "
     <script>
		window.alert('sir you enter duplicate data');
		window.location.href='index.php';
     </script>

	";
} else {
	$query="INSERT INTO signin(name,email,password,address) VALUES('$name','$email','$password','$address')";
	$result=mysqli_query($connection_status,$query);
	if ($result) {
		header("location:index.php");
	} else {
		echo "
     <script>
		window.alert('sir no data inserted');
		window.location.href='.php'signform.php;
     </script>

	";
	}
	
}




 ?>