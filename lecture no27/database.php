<?php 

if (isset($_POST["btn"])) {
	// a
	$n1=$_POST['username'];
	$n2=$_POST['usermail'];
			//5 <= 15
	while ($n1 <= $n2) {
	    echo "Range of natural number  : $n1 <br>";
	    $n1++;
	}

		


} else {
	echo 'no press btn';
}



 ?>