<?php 
	session_start();
	include 'Php_connect.php';
	if (isset($_POST['commentButton'])) {
		$login = $_SESSION['login'];
		$comment = mysqli_real_escape_string($conn, $_POST['commentText']);
		$added_comment = "INSERT INTO `comments` (`author`, `text`) VALUES (?, ?)";
		$stmt = mysqli_prepare($conn, $added_comment);
		mysqli_stmt_bind_param($stmt, 'ss', $login, $comment);

		if (mysqli_stmt_execute($stmt)) {
			mysqli_close($conn);
			include ('main.php');
			echo "<script type='text/javascript'> alert('Успешно')</script>";
		}
		else {
			mysqli_close($conn);
			include ('login.php');
			echo "<script type='text/javascript'> alert('Произошла ошибка')</script>";
		}
	}
	else {
		echo "<script type='text/javascript'> alert('Не нажата кнопка')</script>";
	}
?>
