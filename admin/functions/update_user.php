<?php 

if($_SERVER['REQUEST_METHOD'] == "GET"){
	header("location: ../users.php");
	exit();
}


$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];

include 'connect.php';

// password
if(!empty($password)) {

	$pass = md5($password);

	$updatePass = "UPDATE users SET password = '$pass' WHERE id = $id";

	$queryPass = $conn -> query($updatePass);

}


$update = "UPDATE users 
			SET
				username = '$username',
				email = '$email',
				address = '$address',
				gender = '$gender',
				priv = '$priv'

			WHERE id = $id 
";

$query = $conn -> query($update);


if ($query) {

	header("location: ../users.php");

} else {

	echo $conn -> error ;

}