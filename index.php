<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP lesson-1</title>
</head>
<body>
<?php
	echo '<h1><b>Hello</b> <s>World!</s></h1>';
	echo '<p>Lorem ipsum dolor sit amet.</p>';
	// Переменый
	echo '<h1>Переменая</h1>';
	$number = 4; // int
	$num = 2.32; // float
	$str = 'Переменная: '; // string
	$bool = true; // boolean
	echo $str . $number . $num . '<br>' . 'Variant2: ' . $num;
	$a = 0.5;
	$b = '0.5';
	echo '<br>' . $a + $b;
	echo '<br>' . $a + floatval($b); 
	// Константа
	define('MY_AGE', 24);
	echo '<br> Constant: ' . MY_AGE;
?>
</body>
</html>