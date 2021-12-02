<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$array = array("apple" => 1000); // 연관 배열 생성과 동시에 초기화
	$array["banana"] = 2000;		 // 생성된 연관 배열에 요소 추가 
	$array["orange"] = 1500;
	echo $array["apple"].", ".$array["banana"].", ".$array["orange"];
?>

</body>

</html>