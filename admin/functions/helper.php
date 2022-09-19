<?php 

include 'connect.php';



function auth_user($value){

	global $conn ;

	$select = "SELECT * FROM users WHERE id =".$_SESSION['login'];
	$query = $conn -> query($select);
	$user = $query -> fetch_assoc();
	echo $user[$value];

}

// echo auth_user('username');