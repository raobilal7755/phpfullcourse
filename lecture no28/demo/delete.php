<?php 

include "connection.php";
$id=$_GET['del'];
$query="DELETE FROM student WHERE ID='$id'";
$result=mysqli_query($connection,$query);
if ($result) {
	echo "
          <script>
          window.alert('sir record will be delete successfully');
          window.location.href='crud.php';
          </script>

		";
} else {
	echo "
          <script>
          window.alert('sir record not be delete successfully');
          window.location.href='crud.php';
          </script>

		";
}


 ?>