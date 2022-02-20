<html>
<body>
<?php
$count=0;
for($i=0 ; $i<=50 ; $i++)
{
	$count=0;
	for($j=1 ; $j <= $i; $j++)
	{
		if($i % $j == 0)
			$count++;
	}
	if($count == 2)
		echo "$i<br>";
}
?>
</body>
</html>