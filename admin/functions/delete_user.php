<?php 


include 'connect.php';

$id = $_GET['id'];

$delete = "DELETE FROM users WHERE id = $id";
$delete = $conn -> query($delete);
if($delete) {

	header("location: ../users.php");

} else {

	echo $conn -> error ;

}