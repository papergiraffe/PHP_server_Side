<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Operators</title>
</head>

<body>

<?php
	$num_01 = 3;
	$num_02 = 4.0;
	$num_03 = 5;

	echo "== 연산자에 의한 결과값은 ";
	var_dump($num_01 == $num_02);
	echo "입니다.<br>";

	echo "=== 연산자에 의한 결과값은 ";
	var_dump($num_01 === $num_02);
	echo "입니다.<br>";

	echo "!= 연산자에 의한 결과값은 ";
	var_dump($num_01 != $num_03);
	echo "입니다.<br>";

	echo "<> 연산자에 의한 결과값은 ";
	var_dump($num_01 <> $num_03);
	echo "입니다.<br>";

	echo "> 연산자에 의한 결과값은 ";
	var_dump($num_01 > $num_03);
	echo "입니다.<br>";

	echo "< 연산자에 의한 결과값은 ";
	var_dump($num_01 < $num_03);
	echo "입니다.<br>";
?>

</body>

</html>