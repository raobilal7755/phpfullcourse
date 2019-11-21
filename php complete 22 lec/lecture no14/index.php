<?php 

$marks=6556;

if ($marks >=90 && $marks <= 100) {
	echo 'your grade is A';
}
else if($marks >=80 && $marks <= 89){
	echo 'your grade is B';
}
else if($marks >=70 && $marks <= 79){
	echo 'your grade is C';
}
else if($marks >=60 && $marks <= 69){
	echo 'your grade is D';
}
else if($marks <=50 ){
	echo 'your ara fail';
}
else{
	echo 'sir no data found';
}

 ?>