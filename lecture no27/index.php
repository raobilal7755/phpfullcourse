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
	<h1 class="text-center text-white p-4 bg-danger">HTTP GET VS POST REQUEST</h1>

	<div class="container">
		<form action="database.php" method="post" >
			<form>
				<fieldset class="form-group">
					<label for="userid">Username :</label>
					<input type="text" class="form-control" id="userid" name="username" placeholder="Enter your name">
				</fieldset>
				<fieldset class="form-group">
					<label for="userpass">Email</label>
					<input type="text" class="form-control" id="userpass" name="usermail" placeholder="Enter you mail">
				</fieldset>
				<br>
				<input type="submit" name="btn" value="Submit Form" class="btn btn-primary btn-lg">
			</form>
		</form>
	</div>
</body>
</html>