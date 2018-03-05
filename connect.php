<?php 
	//test | mtanda | 3/04/2018
	//from book -- pp 235 -- connects to database
	//require_once 'login.php';
	$conn = new mysqli('127.0.0.1', 'root', 'wildfire679' , 'mydb', 3306);
	// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
	/*if ($conn->connect_error) die($conn->connect_error);
	echo "Hello world. We have connected to the database (I think). ";
	$q = "INSERT INTO `users` (`f_name`, `l_name`, `user_id`, `user_age`) VALUES ('Joseph', 'Follman', '12346', '57')";
	$result = $conn->query($q);
	$q = "select * from users";
	$result = $conn->query($q);
	if (!$result) die($conn->error);
	$rows = $result->num_rows;
	echo "There are " . $rows . " rows in the Users table."*/
 ?>