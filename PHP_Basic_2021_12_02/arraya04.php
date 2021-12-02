<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$array = array("apple" => 1000, "banana" => 2000, "orange" => 1500);

	foreach ($array as $key => $value) {
		echo $key." : ".$value."<br>";
	}
?>

</body>

</html>