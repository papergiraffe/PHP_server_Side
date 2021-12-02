<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$array = array("apple" => 1000, "banana" => 2000, "orange" => 1500);

	while($element = each($array)) {
		echo $element['key']." : ".$element['value']."<br>";
	}
?>

</body>

</html>