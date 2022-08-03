<?php

include "config.php";


if(isset($_POST['update'])){



	
	$firstname = $_POST['firstname'];
	$id = $_POST['userid'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];


	$sql = "UPDATE `user` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$id'";

	$result = $conn->query($sql);


	if($result == TRUE){


		echo 'Updated successfully.';


	}else {

		echo 'Not Updated..';


	}











}






if(isset($_GET['id'])){
	

 $userid = $_GET['id'];


 $sql = "SELECT * FROM `user` WHERE `id` = '$userid'";


 $result = $conn->query($sql);

if($result->num_rows>0){

	while($row = $result->fetch_assoc()){

		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$email = $row['email'];
		$password = $row['password'];
		$gender = $row['gender'];
		$id = $row['id'];





	}



?>



<!DOCTYPE html>
<html>

<head>

	<h2>Update form</h2>
</head>

<body>

	<form action="" method="POST">


		<fieldset>
			<legend>Persnal Information:</legend>


			
			FirstName :<br>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
			<input type="hidden" name="userid" value="<?php echo $id; ?>">
			<br>
			LastName :<br>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
			<br>
			Email :<br>
			<input type="email" name="email" value="<?php echo $email; ?>">
	        <br>
	        Password:<br>
	        <input type="password" name="password" value="<?php echo $password; ?>">
	        <br>
	        Gender:<br>
	        <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked"; } ?>>Male
	        <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked"; }?>>Female
	        <br>
	        <br>
	        <input type="submit" name="update" value="Update">
	        <br>			





		</fieldset>









	</form>







	</body>





</html>


<?php 


}else{

header('Location:view.php');

}

}
?>
