<?php 

$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$cat_id = $_POST['cat_id'];


// images -- files

$imageName = $_FILES['img']['name'];
$tmpName = $_FILES['img']['tmp_name'];
$size = $_FILES['img']['size'];


// 1 - image uploaded or not
// 2 - specify extension
// 3 - specify size 
// 4 - new random image name 
// 5 - move uploaded file


// 1 - image uploaded or not
if ($_FILES['img']['error'] == 0 ) {

	// 2 - specify extension
	$extensions = ['jpg','png','gif'];
	$ext = pathinfo($imageName , PATHINFO_EXTENSION);
	if (in_array($ext, $extensions)){

		// 3 - specify size 
		if ($size < 2000000) {

			// 4 - new random image name 
			$newName =  md5(uniqid()) . '.' . $ext ;
			

			// 5 - move uploaded file
			move_uploaded_file($tmpName, "../../images/$newName");

		}else{

			die('file size is too big');
		}

	} else {

		die('wrong file extension');
	}


} else {

	exit('you must upload an image');

}


include '../connect.php';

$insert = "INSERT INTO products (name , price, sale , cat_id , img) VALUES ('$name','$price','$sale','$cat_id' , '$newName') ";

$query = $conn -> query($insert);

if($query) {
	header("location: ../../products.php");
} else {
	echo $conn -> error ;
}