<?php 
include "connection.php";

if (isset($_POST["sub"])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	
	$query="INSERT INTO student(name,email,address) VALUES('$name','$email','$address')";
	$result=mysqli_query($connection,$query);
	if ($result) {
		echo "
		<script>
		window.alert('sir data will be inerted successfully');
		window.location.href='form.php';
		</script>
		";
	} else {
		echo "
		<script>
		window.alert('sir no data will be inerted ');
		window.location.href='form.php';
		</script>
		";
	}





} else {
	echo 'no press';
}



 ?>