<?php 
$connection = mysqli_connect('localhost' , 'root' , '' , 'userdb');
//check the connection
if (mysqli_connect_errno()) {

	die('Database connection failed' . mysqli_connect_errno());
}

else {
	echo "connection successful";
		# code...
}
 ?>
