<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Request for Password</title>
	<link rel="stylesheet" href="CSS/ForgetPassword.css">
        <style>
        #message {
            color: red;
        }
    </style>
    <script src="JS/JSValid.js"></script>

</head>
	
	<form name="RP" class="FP" action="../controller/RequestPasswordAction.php" method="POST" onsubmit="return isValidV(this);">
		<fieldset class="field">
			<legend><b>VERIFY INFORMATION</b></legend>
			<h5>
			<label for="vDoB">Date Of Birth :</label>
			<input type="Date" class="info" name="vDoB">
			<br><br>
			<label for="vEmail">Recovery Email :</label>
			<input type="email" class="info" name="vEmail">
			<br><br>
			<label for="vColor">Color :</label>
			<input type="text" class="info" name="vColor">
			</h5>
		</fieldset>
		<br>
		<fieldset class="field">
			<legend><b>SET NEW PASSWORD</b></legend>
			<h5>
			<label for="cpassword">New Password : </label>
			<input type="password" class="info" name="npassword">
			<br><br>
			<label for="cpassword">Confirm Password : </label>
			<input type="password" class="info" name="cpassword">
			</h5>
		</fieldset>
		<br><br>
		<input type="submit" name="verify" class="submit" value="VERIFY AND CHANGE PASSWORD">
	</form>

<p id="message"></p>
<br>
</html>