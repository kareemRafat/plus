<?php 

$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$cat_id = $_POST['cat_id'];


include '../connect.php';

$insert = "INSERT INTO products (name , price, sale , cat_id) VALUES ('$name','$price','$sale','$cat_id') ";

$query = $conn -> query($insert);

if($query) {
	header("location: ../../products.php");
} else {
	echo $conn -> error ;
}