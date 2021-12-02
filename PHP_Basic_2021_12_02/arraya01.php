<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$array = array();			// 배열 생성
	$array["apple"] = 1000;		// 연관 배열 요소 추가
	$array["banana"] = 2000;
	$array["orange"] = 1500;
	echo $array["apple"].", ".$array["banana"].", ".$array["orange"];
?>

</body>

</html>