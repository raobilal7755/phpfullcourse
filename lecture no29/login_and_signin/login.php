<?php 
session_start();

include "connection.php";

$name=$_POST['name'];
$password=$_POST['password'];


$query="SELECT * FROM signin WHERE name='$name' AND password='$password'";

$result=mysqli_query($connection_status,$query);
$rows_match=mysqli_num_rows($result);
if ($rows_match==1) {
	$_SESSION['username']=$name;
	header("location:profile.php");
} else {
	echo "
     <script>
		window.alert('username and password are not match');
		window.location.href='index.php';
     </script>

	";
	
}




 ?>