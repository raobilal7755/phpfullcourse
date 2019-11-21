<?php 
if (isset($_GET['file'])) {
	$file=$_GET['file'];

	header('content-type: application/force-download');
	header('content-disposition: attachment; filename='.basename($file));
	header('content-lenght'.filesize($file));
	readfile($file);
}else {
	header('location:index.php?error=sir no downlaod file');
}



 ?>