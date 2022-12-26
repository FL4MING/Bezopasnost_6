<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Лабораторная работа №2</title>
</head>
<body>
	<?php include "Php_main.PHP";?>
	<h1 style="text-align: center;">
		<?php ContentLoad("name", 1); ?>
	</h1>
	<br>
	<div style="max-width: 50%; align-content: center; margin-left: 24%; margin-right: 24%;">
		<?php ContentLoad("text", 1);?>
	</div>
	<br>
	<?php commentLoad(); ?>
	<br>
	<br>
	<form method="post" action="logout.php" style="margin-left: 24%;">
		<button name="outButton" type="submit">Выход</button>
	</form>
</body>
</html>