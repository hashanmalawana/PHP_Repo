<html>
<head>
	<title>Multi</title>
</head>
<body>

<?php
for ($i=1; $i <=12 ; $i++) { 
	echo "Number : {$i} <br>";

	for ($j=1; $j <= 12; $j++) { 
		echo "$i * $j = " . $i*$j . "<br>";
}
}
?>

</body>
</html>