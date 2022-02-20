<!DOCTYPE html>
<html>
<body>

<?php 
$x = 1;
$num = 123454321;  
$x = 0;
$n =$num;

do {
 $mod = $num%10;
$x = $x * 10 + $mod;  
$num = $num/10;

} while (floor($num));
if($n==$x)
{  
echo "$n is a Palindrome number.";  
}
 
else
{  
echo "$n is not a Palindrome number.";  
} 
?>


</body>
</html>
