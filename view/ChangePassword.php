<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    #message {
        color: red;
    }
    </style>
    <script src="JS/JSValid.js"></script>
    <script src="JS/JSLogout.js"></script>
    <link rel="stylesheet" href="CSS/Home.css">
    <meta charset="UTF-8">
    <title>CHANGE PASSWORD</title>

</head>

<body>

    <h2 id="head">RESET PASSWORD</h2>
    <?php include "header.php"?>
    <form name="CP" action="../controller/ChangePasswordAction.php" method="POST" onsubmit="return isValidCP(this);">
        <br><br>
        <fieldset class="field">
            <legend id=head>
                <h4>CHANGE PASSWORD</h4>
            </legend>
            <h5>
                <label for="currentpassword"><b>Current Password : </b></label>
                <input type="password" name="currentpassword" class="info" placeholder="">
                <br><br>
                <label for="npassword"><b>New Password : </b></label>
                <input type="password" name="npassword" class="info" placeholder="">
                <br><br>
                <label for="confirmpassword"><b>Confirm Password : </b></label>
                <input type="password" name="confirmpassword" class="info" placeholder="">
            </h5>
            <button type="Submit" class="submit">Submit</button>

        </fieldset>
    </form>
    <p id="message"></p>
    <br><br>
    <?php include "footer.php" ?>
</body>

</html>