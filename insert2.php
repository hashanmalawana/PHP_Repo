<?php require_once('inc/connection.php'); ?>

<?php 
 
 $first_name = 'hashan';
 $last_name = 'malawana';
 $email = 'hashanrique@gmail.com';
 $password = 'mypass';
 $is_delete = 0;

 $hashed_password = sha1($password); 

$query = "INSERT INTO user (first_name, last_name, email, password,is_delete) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$password}', {$is_delete})";

$result = mysqli_query($connection, $query);


if($result) {
	echo "Hari";
}
else{
	echo "Weradi";
}

 ?>

<html>
<head>
	<title>Insert Query </title>
</head>
<body>

</body>
</html>

<?php mysqli_close($connection); ?>