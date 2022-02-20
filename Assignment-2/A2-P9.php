<html>
<body>
<?php

//addcslashes
$str = addcslashes("Hello World!","W");
echo($str . "<br> <br>") ;  


//join
$arr = array('hello','World!','Beautiful','Day!');
echo join(" ",$arr ) ;


//rtrim
$str1 = "hello  hunny!";
echo $str1 . "<br>";
echo rtrim($str1,"World!" );


//ltrim
$str = "Hello hunny!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>

</body>
</html>
