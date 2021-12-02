<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$arr = array(
		array("apple", "korea", 1000),
		array("banana", "philippines", 2000),
		array("orange", "us", 1500)
	);

	for($row = 0; $row < count($arr); $row++) {
		for($column = 0; $column < count($arr[$row]); $column++){
			echo $arr[$row][$column].", ";
		}
		echo "<br>";
	}
?>

</body>

</html>