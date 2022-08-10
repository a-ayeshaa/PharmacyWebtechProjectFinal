<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Forgot Password</title>
	<script src="JS/JSValid.js"></script>
	<link rel="stylesheet" href="CSS/ForgetPassword.css">

</head>



<body>
	<form name="ForgetPassword" class="FP" action="../controller/ForgetPasswordAction.php" method="POST" onsubmit="return isValidFP(this);">
		<fieldset class="field">
			<h5>
			<label for="username" id="info">Username:</label>
			<input type="text" class="info" name="username">
			<br><br>
			<label for="email" id="info">Email:</label>
			<input type="email" class="info" name="email">
			</h5> 
		</fieldset>
		<p id="message"></p>
		<br>
		<input type="submit" name="request" value="REQUEST FOR NEW PASSWORD" class="submit">
	</form>
	<br><br>



</body>
</html>