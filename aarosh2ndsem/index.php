<?php

$studentNames = ["Aarav", "Sita", "Rahul", "Priya"];

foreach ($studentNames as $name) {
}


$numbers = [12, 45, 7, 89, 23, 56, 34, 91, 18, 60];

$maxValue = $numbers[0];

foreach ($numbers as $number) {
	if ($number > $maxValue) {
		$maxValue = $number;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>home</title>
</head>
<body>

<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="learning.php">Learning.php</a></li>
		<li><a href="mySite.php">Mysite</a></li>
	</ul>
</nav>
	
</body>
</html>
