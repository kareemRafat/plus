<?php 
session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);

include 'connect.php';

$checkUser = "
		SELECT id FROM users 
		WHERE 
			username = '$username' 
				AND 
			password = '$password'
";

$query = $conn -> query($checkUser);


if ( $query -> num_rows > 0){

	// get user id form the selected user
	$user = $query -> fetch_assoc();
	$id = $user['id'];

	// make login session 
	$_SESSION['login'] = $id ;

	// go to dashboard index
	header("location: ../index.php");

} else {

	// when user not found make error session
	$_SESSION['error'] = '<div class="alert alert-danger">wrong credentials</div>';

	// go to login page when user not found
	header("location: ../login.php");

}
 

