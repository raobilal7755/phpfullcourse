<?php 
if (isset($_GET['filename'])) {
	$file='upload/'.$_GET['filename'];
	header('content-type: application/force-download');
	header('content-disposition: attachment; filename='.basename($file));
	header('content-lenght'.filesize($file));
	readfile($file);
}else {
	header('location:index.php?error=Error: no file downlaod yet');
}



 ?>