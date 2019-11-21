<?php 

function hello(){
	static $i=0;
	$i++;
	echo $i . '<br>';
}


hello();
hello();
hello();
hello();



 ?>