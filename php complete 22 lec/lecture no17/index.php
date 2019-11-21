<?php 

$backend=['php','oop','laravel'];
$course=['html','css','js','bootstrap',$backend];
//  [0]		[1] 	[2]   [3]	[4] 	[5]
$x=['bilal','rao','asif','ali' , 45,$course];

echo '<pre>';
print_r($x);
echo '</pre>';

echo $x[5][4][2];
 ?>