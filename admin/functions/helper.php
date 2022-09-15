<?php 


include 'connect.php';


function auth_user(){

	$select = "SELECT * FROM users WHERE id =".$_SESSION['login'];
	// $query = $conn -> query

}

// echo auth_user('username');