<?php 
$add=['street'=>'1','city'=>'Lahore','zipcode'=>23232];
$x=[
	'ID'=>'1',
	'name'=>'Bilal',
	'email'=>'bilal@gmail.com',
	'address'=>$add
];



echo '<pre>';
print_r($x);
echo '</pre>';

echo $x['address']['zipcode'];

 ?>