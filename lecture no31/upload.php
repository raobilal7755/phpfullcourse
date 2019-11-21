<?php 

if (isset($_POST["btn"])) {
	$title=$_POST['title'];
	$para=$_POST['para'];
	
	

	$filename=$_FILES["myFile"]["name"];
	$temp_file=$_FILES["myFile"]["tmp_name"];
	//$upload_dir="upload/".$filename; //ye btaya ga ky file name kiya hoga..
	$file_size=$_FILES["myFile"]["size"];
	$file_ext=pathinfo($filename,PATHINFO_EXTENSION);
	$file_unique=uniqid().".".$file_ext;
	$upload_dir="upload/".$file_unique;
	
	
	// now we add condition only image are uploading
	if ($file_ext=='jpg' OR $file_ext=='png' OR $file_ext=='gif') {
		


	// is method two paremeter pass ho gy , temp file jo serve per ho ge temperily and dir jaha upload kerna ho ga..
	$result=move_uploaded_file($temp_file,$upload_dir);

 

	if ($result) {
		// database portion start
		
		include "connection.php";

		$query="INSERT INTO file(location,title,para,filename) VALUES(?,?,?,?)";

		$result=mysqli_prepare($connection_status,$query);

		if ($result) {
			mysqli_stmt_bind_param($result,'ssss',$upload_dir,$title,$para,$file_unique);
			$ans=mysqli_stmt_execute($result);
			if ($ans) {
				header("location:index.php?success=Sir file ara uploaded successfully");
			} else {
				  
			}




		} else {
			echo 'sir no file uploaded';
		}



		// end database portion.



	} else {
		echo 'sir no file upload ';
	}



	} else {
		echo 'sir its not a image';
	}






} else {
	echo 'sir no button press';
}




 ?>