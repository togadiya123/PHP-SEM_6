<html>
<body>
<?php
	echo"Sum Of Digits :</br></br>";

	$number = 12345;
	$total = 0;

	while($number > 0){
		$total = $total + $number % 10;
		$number = $number / 10;
	}
	echo "sum of '12345' = ".$total;
?>
</body>
</html>


