<?php 


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

include '../admin/functions/connect.php';

$insert = "INSERT INTO messages 
			(name , phone , email , message) 
			VALUES 
			('$name' , '$phone' , '$email' , '$message')";

if ($conn -> query($insert)) {

	echo "<div class='alert alert-success'>Message sent successfully</div>";

} else {

	echo $conn -> error ;

}