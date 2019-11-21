<?php 
session_start();


include "connection.php";

$name=$_POST['name'];
$password=$_POST['password'];


$query="SELECT * FROM signin WHERE name='$name' AND password='$password'";
$result=mysqli_query($connection_status,$query);
$row_match=mysqli_num_rows($result);

if ($row_match==1) {

	$_SESSION['username']=$name;
	header("location:home.php");
	
} else {
	echo "
		<script>
		window.alert('sir username and password ara not match');
		window.location.href='index.php';
		</script>


	";
	
}










 ?>