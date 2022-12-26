<?php 
	include 'Php_connect.php';
	if (isset($_POST['inButton'])) {
		if ($_POST['login'] != "" && $_POST['pass1'] != "" && $_POST['pass2'] != "") {
			$login = $_POST['login'];
			$data = "SELECT * FROM `users` WHERE `login` = '$login'";
			$check = mysqli_query($conn, $data);
			if (mysqli_num_rows($check) == 1) {
				mysqli_close($conn);
				include 'index.php';
				echo "<script type='text/javascript'> alert('Такой пользователь уже есть')</script>";
			}
			else {
				if ($_POST['pass1'] == $_POST['pass2']) {
					$pass = password_hash($_POST['pass1'], PASSWORD_DEFAULT);
					$data = "INSERT INTO `users` (`login`, `pass`) VALUES ('$login', '$pass')";
					$check = mysqli_query($conn, $data);
					if ($check) {
						mysqli_close($conn);
						include 'index.php';
						echo "<script type='text/javascript'> alert('Вы успешно зарегистрированы')</script>";
					}
					else {
						mysqli_close($conn);
						include 'index.php';
						echo "<script type='text/javascript'> alert('Произошла ошибка')</script>";
					}
				}
				else {
					include 'index.php';
					echo "<script type='text/javascript'> alert('Введённые пароли не совпадают')</script>";
				}
			}
		}
	}
?>