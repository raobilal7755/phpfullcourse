<?php 
include "connection.php";

$id=$_GET['del'];

$query="DELETE FROM student WHERE id='$id'";
$result=mysqli_query($connection,$query);
if ($result) {
	echo "
		   		<script>
		   		window.alert('sir data will be deleted successfully');
		   		window.location.href='main_view_file.php';
		   		</script>
		   	";
} else {
	echo "
		   		<script>
		   		window.alert('sir no data will be delete ');
		   		window.location.href='main_view_file.php';
		   		</script>
		   	";
}





 ?>