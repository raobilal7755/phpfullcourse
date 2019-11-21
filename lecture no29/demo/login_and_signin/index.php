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
	<style>
		a{
			font-size: 20px;
			margin-right: 5px;
		}
		#brand{
			font-size: 25px;
		}
	</style>
</head>
<body class="bg-secondary">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-4">
		<!-- this is brand name -->
		<a href="#" title="" class="navbar-brand text-warning" id="brand">How To Developer</a>
		<!-- end brand name -->
		
		<!-- toggle button -->
		<div class="navbar-toggler" data-toggle="collapse" data-target="#navkiid">
			<span class="navbar-toggler-icon"></span>
		</div>
		<!-- end btn -->

		<div class="collpase navbar-collapse" id="navkiid">
			
		
		<ul class="navbar-nav ml-auto text-center">
			<li class="nav-item">
				<a href="" title="" class="nav-link">Home</a>
			</li>

			<li class="nav-item">
				<a href="" title="" class="nav-link">Product</a>
			</li>
			

			<li class="nav-item">
				<a href="" title="" class="nav-link">About Us</a>
			</li>

			<li class="nav-item">
				<a href="" title="" class="nav-link">Contect Us</a>
			</li>

			
		</ul>

		<ul class="navbar-nav ml">
			<li class="nav-item">
				<a href="./signinform.php" title="" class="nav-link" >
					<button class="btn btn-outline-warning btn-lg" >Signin</button>
				</a>
			</li>

			<li class="nav-item">
				<a href="#" title="" class="nav-link" data-toggle="modal" data-target='#modal-1'>
					<button class="btn btn-outline-warning btn-lg" >Login</button>
				</a>
			</li>
		</ul>

		</div>
	</nav>

	<!-- for login -->
	<div class="modal fade" id="modal-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" class="text-primary">Login</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							
						</div>
						<div class="modal-body">
				
							
						 <form action="login.php" method="post">
						 	<fieldset class="form-group">
						 		<label for="">Username :</label>
						 		<input type="text" name="name" class="form-control" id="" placeholder="Enter your name">
						 	</fieldset>
						 	<fieldset class="form-group">
						 		<label for="">Password</label>
						 		<input type="text" name="password" class="form-control" id="" placeholder="Enter your Password">
						 	</fieldset>
						 	<br>
						 	<div class="justify-content-center">
						 		<input type="submit" name="" value="Submit Form" class="btn btn-primary btn-lg">
						 	</div>
						 </form>

							<!-- end form -->

						
					</div> 
				</div>
			</div>

	<!-- end login -->

			

			
</body>
</html>











