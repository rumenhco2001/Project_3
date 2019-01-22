<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p> Insert RGB </p>
	<form action="" method="post" >
		<input type="text" name="text">
		<p> <input type="submit" name="submit">	</p>
	</form>
</body>
</html>
<?php
if (!empty($_POST)) {
$text = $_POST['text'];
$a = str_split($text, 2);
hexdec($text);
echo $a[0];
// $text = $tex["text"];
// $info = array($text, 'Example');
// echo $info[0];
}

// function choose_green_dress ($c){
// 	hexdec($c);
	
// }

// print_r(str_split("Hello", 2));