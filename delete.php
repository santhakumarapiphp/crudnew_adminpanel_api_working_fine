

<?php

include "config.php";

if(isset($_GET['id'])){


$userid = $_GET['id'];


$sql = "DELETE FROM `user` WHERE `id`='$userid'";


$result = $conn->query($sql);


if($result == TRUE){

 	echo 'Delete record successfully..';

}else {

    echo 'record not delected..';

}





}





?>