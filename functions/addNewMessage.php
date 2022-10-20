<?php 


$name = $_POST['Name'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$message = $_POST['Message'];

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