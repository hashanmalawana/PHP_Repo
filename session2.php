<?php
session_start();
?>

<html>
<head>
	<title>Session1</title>
</head>
<body>
<?php 
echo "User ID: {$_SESSION['user_id']}<br>";

echo "First Name: {$_SESSION['first_name']}<br>";

 ?>
</body>
</html>