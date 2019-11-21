<?php 
$title=$_POST['title'];
$para=$_POST['para'];

$file_name=$_FILES["myfile"]["name"];
$temp_file=$_FILES["myfile"]["tmp_name"];
//$upload_dir="upload/".$file_name;
$file_size=$_FILES["myfile"]["size"];
$file_ext=pathinfo($file_name,PATHINFO_EXTENSION);
$file_unique=uniqid().".".$file_ext;
$upload_dir="upload/".$file_unique;


if ($file_ext=='jpg' OR $file_ext=='png' OR $file_ext=='gif') {
	$result=move_uploaded_file($temp_file,$upload_dir);
	if ($result) {
		
		// database portion
		include "connection.php";
		$query="INSERT INTO myfile(title,para,image) VALUES(?,?,?)";
		$get_object=mysqli_prepare($connection_status,$query);
		if ($get_object) {
			mysqli_stmt_bind_param($get_object,'sss',$title,$para,$upload_dir);

			$result=mysqli_stmt_execute($get_object);
			if ($result) {
				header("location:index.php?success=Sir upload data in database successfully");	
			} else {
				header("location:index.php?error=Sir no upload in database");	
			}
		} else {
			
		}


		// end database



	} else {
		header("location:index.php?error=Sir no image upload ");
	}
} else {
	header("location:index.php?error=its not a image file");
}


 ?>