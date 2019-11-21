<?php 
include "connection.php";
$id=$_GET['update'];
$query="SELECT * FROM student WHERE id='$id'";
$result=mysqli_query($connection,$query);
$data=mysqli_fetch_assoc($result);



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
 	<h1 class="text-center text-white bg-danger p-4">UPDATE STUDENT DATA </h1>
 	<div class="container">
 		<form method="post">
 		<fieldset class="form-group">
 			<label for="">Username :</label>
 			<input type="text" name="name" value="<?php echo $data["name"]; ?>" class="form-control" id="" placeholder="Enter your name">
 		</fieldset>
 		<fieldset class="form-group">
 			<label for="">Email</label>
 			<input type="text" name="email" value="<?php echo $data["email"]; ?>" class="form-control" id="" placeholder="Enter your email">
 		</fieldset>

 		<fieldset class="form-group">
 			<label for="">Address</label>
 			<input type="text" name="address" value="<?php echo $data["address"]; ?>" class="form-control" id="" placeholder="Enter your address">
 		</fieldset>

 		<br>
 		<input type="submit" name="btn" value="Update Form" class="btn btn-primary btn-lg">

 	</form>
 	</div>
 </body>
 </html>



 <?php 

	if (isset($_POST["btn"])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$address=$_POST['address'];

		$query="UPDATE student SET name='$name',email='$email',address='$address' WHERE id='$id'";
		$result=mysqli_query($connection,$query);
		if ($result) {
			echo "
		   		<script>
		   		window.alert('sir data will be updated successfully');
		   		window.location.href='main_view_file.php';
		   		</script>
		   	";
		} else {
			echo "
		   		<script>
		   		window.alert('sir no data will be updated ');
		   		window.location.href='main_view_file.php';
		   		</script>
		   	";
		}



	} else {
		echo 'no press btn';
	}







  ?>