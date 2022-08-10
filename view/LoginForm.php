<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Login Form</title>
	<script src="JS/JSValid.js"></script>
	<link rel="stylesheet" href="CSS/CSSLogin.css">

</head>

<body class="a">

	<p class="t">Login Form</p>
	<div class= "all">
	
 	<form name="Login" class="Login" action="../controller/LoginFormAction.php" method="POST" onsubmit="return isLoginValid(this);">
		<label for="username" id="lab">Username:</label>
		<input type="text" name="username" class="username">
		<br><br>
		<label for="password" id="lab">Password:</label>
		<input type="password" name="password" class="password">
		<br><br>
		<input type="submit" value="Submit" class="submit">
		<br><br>
		
	</form>
	<p id="message"></p>
	<a href="ForgetPassword.php" class="link"> Forgot Password? </a>
	<br><br>
	Not registered yet? <a href="CustomerRegistration.php" class="link"> Click here </a> for registration.
	<br><br>
</div>
</body>
</html>