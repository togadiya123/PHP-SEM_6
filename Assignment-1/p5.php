<html>
<body>
<?php
$ans=1;
$a=4;
function Fact($a)
{
	if($a<=1)
		return 1;
	else
		return $a*fact($a-1);
}
echo "Factorial is :".Fact($a);
?>
</body>
</html>