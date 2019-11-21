<?php 
session_start();
echo "My name is : ". $_SESSION['name'] ."<br>";
session_unset();
session_destroy();




 ?>