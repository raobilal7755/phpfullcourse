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
	<h1 class="text-center text-white p-4 bg-danger">File Uploading in PHP</h1>

	<div class="container">
	<div class="alert alert-success">
		<?php 
		if (isset($_GET['success'])) {
			echo $_GET['success'];
		} else {
			
		}

		 ?>


	</div>

	<div class="alert alert-danger">
		<?php 
		if (isset($_GET['error'])) {
			echo $_GET['error'];
		} else {
			
		}

		 ?>


	</div>



		<form method="post" action="code.php" enctype="multipart/form-data">
		<fieldset class="form-group">
			<label for="">Title</label>
			<input type="text" name="title" class="form-control" id="" placeholder="Enter your title">
		</fieldset>
		<fieldset class="form-group">
			<label for="">Text :</label>
			<input type="text" name="para" class="form-control" id="" placeholder="Enter your text">
		</fieldset>

		<fieldset class="form-group">
			<label for="">Upload File :</label>
			<input type="file" name="myfile" class="form-control" id="" placeholder="Enter your text">
		</fieldset>

		<br>
		<input type="submit" name="" value="Submit Form" class="btn btn-primary btn-lg">
	</form>
	</div>
</body>
</html>


<?php 
include "connection.php";
$query="SELECT * FROM myfile";
$get_object=mysqli_prepare($connection_status,$query);
if ($get_object) {
	mysqli_stmt_bind_result($get_object,$id,$title,$para,$image);
	mysqli_stmt_execute($get_object);
?>
 <?php while (mysqli_stmt_fetch($get_object)) { ?>
     	
     	<div class="row d-flex d-inline-flex ml-2 mt-5">
     		<div class="col-lg-4">
     			
     				 	<div class="card" style="width: 300px">
     			
     				 		<img src="<?php echo $image; ?>" alt="" class="card-img rounded">
     				 		<!-- now start body portion of images -->
     				 		<div class="card-body text-center">
     				 			<!-- this is header portion of card -->
     				 			<h4 class="card-header">How To Developer</h4>
     				 			<h4 class="card-title"><?php echo $title; ?></h4>
     				 			<p class="card-text"><?php echo $para; ?></p>
     				 			<a href="download.php?file=<?php echo $image; ?>" class="btn btn-primary">Download</a>
     			
     				 			<!-- this is a footeer portion -->
     				 			<h6 class="card-footer">please like & share</h6>
     				 		</div>
     				 	</div>
     			</div>
     		</div>




 <?php } ?>


<?php
} else {
	echo 'sir no object found';
}

 ?>