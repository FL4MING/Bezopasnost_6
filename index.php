<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="icon" type="image/png" href="Photo\icon.png">
	<link rel="stylesheet" type="text/css" href="index_style.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
	</style>
</head>
<body>
	<div id="regOn" style="display: none;">
		<div class="container">
			<form class="login" action="Registration.php" method="post">
				<h1 class="welcome_bar">Registration</h1>
				<div class="input_style">
					<input class="login_input m-t-80" type="text" name="login" placeholder="Username" onfocus="border(this)" onblur="disBorder(this)">
					<div class="focus_input"></div>
				</div>
				<div class="input_style">
					<input class="pass_input" type="password" name="pass1" placeholder="Password" onfocus="border(this)" onblur="disBorder(this)">
				</div>
				<div class="input_style">
					<input class="pass_input" type="password" name="pass2" placeholder="Password" onfocus="border(this)" onblur="disBorder(this)">
				</div>
				<div class="container_inButton">
					<button class="inButton" name="inButton" type="submit">OK</button>
				</div>
			</form>
			<button onclick="reg();" class="registration" name="inButton">Autorization</button>
		</div>
	</div>
	<div class="container">
		<form class="login" action="login.php" method="post">
			<h1 class="welcome_bar">Welcome</h1>
			<img src="Photo\user.png" class="user_icon">
			<div class="input_style">
				<input class="login_input m-t-80" type="text" name="login" placeholder="Username" onfocus="border(this)" onblur="disBorder(this)">
				<div class="focus_input"></div>
			</div>
			<div class="input_style">
				<input class="pass_input" type="password" name="pass" placeholder="Password" onfocus="border(this)" onblur="disBorder(this)">
			</div>
			<div class="container_inButton">
				<button class="inButton" name="inButton" type="submit">LOGIN</button>
			</div>
		</form>
		<button onclick="reg();" class="registration" name="inButton">Registration</button>
	</div>
	<script src="styles.js"></script>
</body>
</html>