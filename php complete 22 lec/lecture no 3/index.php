<?php 

$x='Rao Bilal';
print gettype($x).'<br>';

$x="Rao Bilal";
print gettype($x).'<br>';

$x=5;
print gettype($x).'<br>';

$x=5.00000;
print gettype($x).'<br>';

$x=null;
print gettype($x).'<br>';

$x=false;
print gettype($x).'<br>';

$x=new stdclass;
print gettype($x).'<br>';

$x=[];
print gettype($x).'<br>';


 ?>