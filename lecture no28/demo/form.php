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
<body class="bg-info">
	<h1 class="text-center text-white bg-danger p-4">INSERT DATA INTO DATABASE</h1>
	<div class="container">
		<form method="post" action="action.php">
			<fieldset class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" name="name" id="" placeholder="Enter your name">
			</fieldset>
			<fieldset class="form-group">
				<label for="f">Email</label>
				<input type="text" class="form-control" name="email" id="" placeholder="Enter your mail">
			</fieldset>
			<fieldset class="form-group">
				<label for="f">Address</label>
				<input type="text" class="form-control" name="address" id="" placeholder="Enter your address">
			</fieldset>
			<br>
			<input type="submit" name="sub" value="Submit Form" class="btn btn-danger btn-lg">
		</form>
	</div>
</body>
</html>