<?php


$con = mysqli_connect("localhost","root","","crudnew");

$response = array();

if($con){

$sql = "select * from user";


$result = mysqli_query($con,$sql);

if($result){

	$i=0;

	while($row = mysqli_fetch_assoc($result)){

		$response[$i]['id'] = $row['id'];
		$response[$i]['firstname'] = $row['firstname'];
		$response[$i]['lastname'] = $row['lastname'];
		$response[$i]['email'] = $row['email'];
		$response[$i]['password'] = $row['password'];
		$response[$i]['gender'] = $row['gender'];

		$i++;



	}

echo json_encode($response,JSON_PRETTY_PRINT);


}

}else{

echo "Database not connected...";


}






?>