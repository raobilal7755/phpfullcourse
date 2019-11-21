<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		h2{
			color: red;
		}
	</style>
</head>
<body>
	<?php 
		$one='one';
		if ($one == 'one') {
			
			$two='two';
			if ($two == 'two') {
				
				$three='three';
				if ($three=='three') {
					echo 'welcome 3';
				} else {
					echo '<h2>Oops 2 ky bad 3  aya ga.</h2>';
				}

			} else {
				echo '<h2>Oops 1 ky bad 2  aya ga.</h2>';
			}

		} else {
			echo '<h2>Oops 1 phely aya ga.</h2>';
		}


	 ?>
</body>
</html>