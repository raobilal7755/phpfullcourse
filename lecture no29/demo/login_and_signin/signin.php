<?php 
session_start();


include "connection.php";

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];

$query="SELECT * FROM signin WHERE name='$name' AND password='$password'";
$result=mysqli_query($connection_status,$query);
$row_match=mysqli_num_rows($result);

if ($row_match==1) {
	echo "
		<script>
		window.alert('sir you are enter duplicate data');
		window.location.href='index.php';
		</script>


	";
} else {
	$query="INSERT INTO signin(name,email,password,address) VALUES('$name','$email','$password','$address')";
	$result=mysqli_query($connection_status,$query);
	if ($result) {
	header("location:index.php");
	} 
	echo "
		<script>
		window.alert('sir not inserted data ');
		window.location.href='index.php';
		</script>


	";	
	
}










 ?>