<?php
$nam = "HELLO WORLD I AM UPPER";
$na = "hello i am lower";
$fulnam = $nam;
$fulnam .=$na;
echo "<br>";
echo $fulnam;
echo "<br>";
?>

<?php echo strtolower($nam)?>
<?php echo strtoupper($na)?>