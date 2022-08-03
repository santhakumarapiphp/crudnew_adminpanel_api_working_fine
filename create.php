<?php


include "config.php";


//If click submit button in the web page

if(isset($_POST['submit'])){


	//get variable from webpage form
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];

//insert queries

	$sql = "INSERT INTO `user` (`firstname`,`lastname`,`email`,`password`,`gender`) VALUES ('$firstname','$lastname','$email','$password','$gender')";

	$result = $conn->query($sql);


	if($result == TRUE){
		echo 'New Record Created successfully.';
	}else{
		echo 'Error:' .$sql.'<br>' .$conn->error;
	}


	$conn->close();

}


?>



















<!DOCTYPE html>
<html>

<h2> SignUp Form </h2>

<body>

<form action="" method="POST">
<fieldset>

<legend>Profile information</legend>

Firstname:<br>
<input type="text" name="firstname">
<br>
Lastname:<br>
<input type="text" name="lastname">
<br>
Email:<br>
<input type="email" name="email">
<br>
Password:<br>
<input type="password" name="password">
<br>
Gender:<br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br>
<br>
<input type="submit" name="submit" value="submit">
<br>
<br>





</fieldset>




</form>


</body>

</html?