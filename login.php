<?php 
	include 'Php_connect.php';
		if (isset($_POST['inButton'])) {
			if ($_POST['login'] != "" && $_POST['pass'] != "") {
			$login = $_POST['login'];
			$pass = $_POST['pass'];
			$data = "SELECT * FROM `users` WHERE `login` = '$login'";
			$check = mysqli_query($conn, $data);
			if (mysqli_num_rows($check) == 1) {
				$row = mysqli_fetch_assoc($check);
				mysqli_close($conn);
				if (password_verify($pass, $row['pass'])) {
						session_start();
						$_SESSION['id'] = session_id();
						$_SESSION['login'] = $login;
					include 'main.php';
				}
				else {
					include 'index.php';
					echo "<script type='text/javascript'> alert('Введены неверные данные')</script>";
				}
			}
			else {
				include 'index.php';
				echo "<script type='text/javascript'> alert('Введены неверные данные')</script>";
			}
			}
			else {
				include 'index.php';
				echo "<script type='text/javascript'> alert('Заполните все поля')</script>";
			}
		}
?>