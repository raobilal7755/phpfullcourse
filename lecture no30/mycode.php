<?php 
include "connection.php";



$query="SELECT * FROM student";

$get_object=mysqli_prepare($connection_status,$query);

if ($get_object) {
	//mysqli_stmt_bind_param($get_object,'i',$id);
	mysqli_stmt_bind_result($get_object,$id,$name,$email,$address);


	//$id=$_POST['id'];
	
	
	mysqli_stmt_execute($get_object);
	mysqli_stmt_fetch($get_object);
	echo $id . " " . $name . " " . $email . " " . $address;

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</head>
	<body>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>ADDRESS</th>
				</tr>
			</thead>
			<tbody>
				<?php while (mysqli_stmt_fetch($get_object)) {?>
				    <tr>
				    	<td><?php echo $id; ?></td>
				    	<td><?php echo $name; ?></td>
				    	<td><?php echo $email; ?></td>
				    	<td><?php echo $address; ?></td>
				    </tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
	</html>



<?php	
} else {
	echo 'sir no object found';
}


 ?>