<?php 

include "connection.php";


$query="SELECT * FROM student";
$result=mysqli_query($connection,$query);



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
 				<th>Name</th>
 				<th>Email</th>
 				<th>Address</th>
 				<th>Edit Record</th>
 				<th>Remove Record</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php while ($data=mysqli_fetch_assoc($result)) { ?>
 			    <tr>
 				<td><?php echo $data["ID"]; ?></td>
 				<td><?php echo $data["Name"]; ?></td>
 				<td><?php echo $data["email"]; ?></td>
 				<td><?php echo $data["address"]; ?></td>
 				
 				<td><a href="update.php?edit=<?php echo $data["ID"]; ?>" class="btn btn-success btn-lg">Update</a> </td>
 				<td><a href="delete.php?del=<?php echo $data["ID"]; ?>" class="btn btn-danger btn-lg">Delete</a> </td>
 				</tr>

 			<?php 
 			} 
 		?>
 		</tbody>
 	</table>
 </body>
 </html>

