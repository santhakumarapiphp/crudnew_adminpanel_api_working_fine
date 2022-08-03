<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudnew";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//execute query
if($conn->connect_error){
	die ("Connection Failed:" .$conn->connect_error);
}else{
	echo "Database Connected...";
}

?>