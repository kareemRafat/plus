<?php 

include '../connect.php';

$id = $_POST['id'];


$update = "UPDATE messages SET view = 1 WHERE id = $id";

$query = $conn -> query($update);

if ($query) {

	echo 'message updated';

} else{

	echo $conn -> error ; 
}