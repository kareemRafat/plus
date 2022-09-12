<?php 

if($_SERVER['REQUEST_METHOD'] == "GET"){
	header("location: ../users.php");
	exit();
}


$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$address = $_POST['address'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];

include 'connect.php';

$insert = "INSERT INTO users 
			(username , password , email , address , priv , gender)
			VALUES
			('$username' , '$password' , '$email' , '$address' , '$priv' , '$gender')
";

$query = $conn -> query($insert);

if ($query) {

	header("location: ../users.php");

} else {

	echo $conn -> error ;

}