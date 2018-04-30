<?php 
$connection = mysql_connect('localhost' , 'root' , ' ','user');
//check the connection
if (mysqli_connect_errno()) {

	die('Database connection failed' . mysqli_connect_errno());
}

else {
	echo "connection successful";
		# code...
}
 ?>
