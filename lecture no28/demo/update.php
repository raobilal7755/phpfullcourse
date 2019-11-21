<?php 
include "connection.php";
$id=$_GET['edit'];
$query="SELECT * FROM student WHERE ID='$id'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);

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
 	<div class="container">
 		<form method="post">
 			<fieldset class="form-group">
 				<label for="">Username</label>
 				<input type="text" class="form-control" name="naam" value="<?php echo $row["Name"]; ?>">
 			</fieldset>
 			<fieldset class="form-group">
 				<label for="">Email</label>
 				<input type="text" class="form-control" name="mail" value="<?php echo $row["email"]; ?>">
 			</fieldset>
 			<fieldset class="form-group">
 				<label for="">Address</label>
 				<input type="text" class="form-control" name="add" value="<?php echo $row["address"]; ?>">
 			</fieldset>
 			<br>
 			<input type="submit" name="btn" value="Submit Form" class="btn btn-primary btn-lg">
 		</form>
 	</div>
 </body>
 </html>

 <?php 
if (isset($_POST["btn"])) {
	$name=$_POST['naam'];
	$email=$_POST['mail'];
	$address=$_POST['add'];
	$query="UPDATE student SET Name='$name',email='$email',address='$address' WHERE ID='$id'";
	$result=mysqli_query($connection,$query);
	if ($result) {
		echo "
          <script>
          window.alert('sir record will be update successfully');
          window.location.href='crud.php';
          </script>

		";
	} else {
		echo "
          <script>
          window.alert('sir record not be update successfully');
          window.location.href='crud.php';
          </script>

		";
	}



} else {
	echo 'sir no press btn';
}




  ?>






 