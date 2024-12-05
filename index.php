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
	// Математическая дествия  
	echo '<h1>Математическая дествия</h1>';
	$x = 10;
	$y = 20;
	echo $x + $y . '<br>';
	echo $x - $y . '<br>';
	echo $x * $y . '<br>';
	echo $x / $y . '<br>';
	echo $x % $y . '<br>';

	$x += 10; // x = x + 10
	$y -= 10; // y = y - 10
	echo $x . '<br>';
	echo $y . '<br>';

	$x++; // $x += 1;
	$x--; // $x -= 1;

	echo M_PI . '<br>'; // 3.14
	echo M_E . '<br>'; // 2.7

	echo abs(-22) . '<br>';
	echo ceil(3.1) . '<br>';
	echo floor(3.9) . '<br>';
	echo round(3.5) . '<br>';
	echo round(3.5435323, 2) . '<br>';
	echo mt_rand(1, 20) . '<br>';
	echo min(2,5,7,-8,3,7,1,-4) . '<br>';
	echo max(2,5,7,-8,3,7,1,-4);

	// Строковые операции
	echo '<h1>Строковые операции</h1>';
	$str = 'Hello';
	// echo "VAR: $str" . '<br>';
	// echo 'VAR: $str' . '<br>';
	echo "<input type='text'>" . '<br>';
	$length = strlen($str);
	echo $length . '<br>';
	echo strtoupper(trim('     some     ')) . '<br>';    
	echo strtolower('HELLO') . '<br>';
	echo md5('qwerty
	');

	// Условные операторы
	echo '<h1>Условные операторы</h1>';
	$a = 15;
	$b = 12;
	if($a == $b){
		echo $a + $b . '<br>';
	}else if($a > 10 & $b > 10){
		echo 'Резултат больше 10' . '<br>';
		$result = $a + $b;
		if($result > 40){
			echo 'Резултат больше 40' . '<br>';
		}else{
			echo 'Резултат меньше 40 - ' . $result . '<br>';
		}
	}else{
		echo $a - $b . '<br>';
	}
	$str = 'hello';
	if($str == 'world' || $str == 'hello'){
		echo 'Резултат равно world или hello';
	}else{
		echo 'Резултат не равно world или hello';
	}

	// Оператор «Switch-case»
	echo '<h1>Оператор «Switch-case»</h1>';
	$x = 2;
	switch($x){
		case 6:
			echo 'x = 6';
			break;
		case 7:
			echo 'x = 7';
			break;
		case 8:
			echo 'x = 8';
			break;
		case 9:
			echo 'x = 9';
			break;
		case 10:
			echo 'x = 10';
		break;
		default:
			echo 'default work!';
	}

	// Массивы данных. Одномерные и многомерные
	echo '<h1>Массивы данных. Одномерные и многомерные</h1>';
	// Одномерный массивы
	$nums = array(7,3,5,9,1,-2,5);
	echo $nums[1] . '<br>';

	$arr = [3,8,2.43,'hello',true, 45];
	$arr[1] = "false";
	echo $arr[1] . '<br>';

	// Ассоциативный массивы
	$list = ['age' => 34, 'name' => 'Alex', 'hobby' => 'Football'];
	$list['name'] = 'John';
	echo $list['name'] . '<br>';

	// Многомерные массивы
	$matrix = [[4,7,true],[6,'hello',4.2],[1,2,3]];
	echo $matrix[0][1] . '<br>';

	$matrix[0][1] = 10;
	echo $matrix[0][1] . '<br>';

	// Цикл for, while и do while.
	echo '<h1>Цикл for, while и do while.</h1>';

	// for($i = 1; $i <= 10; $i++){
	// 	echo $i . '<br>';
	// }

	// $a = 1;
	// while ($a <= 10) {
	// 	echo $a.'<br>';
	// 	$a++;
	// }

	// $i = 100;
	// do{
	// 	echo $i;
	// }while($i < 100)

	// for($i = 100; $i > 10; $i /= 2){
	// 	if($i < 15)
	// 		break;
	// 	if($i % 2 == 0)
	// 		continue;
	// 	echo $i . '<br>';
	// }

	// $list = [5,3,7,32,4,'some'];
	// for($i = 0; $i < count($list); $i++)
	// 	echo "Element $i: $list[$i].<br>";

	$list = ['age' => 40, 'name' => 'John', 'hobby' => 'Football'];
	// foreach ($list as $item => $value){
	// 	echo 'Key:' . $item. 'Value:'. $value. '<br>';
	// }

	$arr = [4,6,32,6,7];

	// foreach($arr as $value)
		// echo 'Value:'. $value. '<br>';

	// foreach($arr as $i => $value)
	// 	echo 'Index:'. $i. 'Value'. $value. '<br>';
?>
</body>
</html>