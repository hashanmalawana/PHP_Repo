<?php require_once('inc/connection.php'); ?>

<?php 
 
 $first_name = 'hashan';
 $last_name = 'malawana';
 $email = 'hashanrique@gmail.com';
 $password = 'mypass';
 $is_deleted = 0;

 $hashed_password = sha1($password);
 echo "Hashed password : {$hashed_password}";

 ?>

<html>
<head>
	<title>Insert Query </title>
</head>
<body>

</body>
</html>

<?php mysqli_close($connection); ?>