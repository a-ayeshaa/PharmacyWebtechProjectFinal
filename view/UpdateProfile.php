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

    <meta charset="UTF-8">
    <title>WELCOME</title>
    <link rel="stylesheet" href="CSS/Home.css">

    <script src="../view/JS/JSValid.js"></script>
    <script src="JS/JSLogout.js"></script>

</head>

<body>

    <br>
    <?php include "header.php"?>
    <h4 id="head">UPDATE INFORMATION : </h4>


    <form name="UpdateProfile" class="UP" action="../controller/UpdateProfileAction.php" method="POST"
        onsubmit="return isValidUP(this);">


        <h5>
            First Name : <input type="text" name="firstName" class="info" value=<?php echo $_SESSION['firstName'];?>>

            <br><br>

            Last Name : <input type="text" name="lastName" class="info" value=<?php echo $_SESSION['lastName'];?>>


            <br><br>

            Gender :
            <input type="text" name="gender" class="info" value=<?php echo $_SESSION['gender'];?> readonly>

            <br><br>

            Date of Birth : <input type="date" name="DoB" class="info" value=<?php echo $_SESSION['DoB']?>>

            <br><br>

            Religion :
            <select name="religion" class="info" value=<?php echo $_SESSION['religion']?>>
                <option>Islam</option>
                <option>Hindu</option>
                <option>Buddhism</option>
                <option>Others</option>
            </select>

            <br><br>

            <b>Present Address :</b>
            <br>
            <textarea name="presentAddress" class="info"><?php echo $_SESSION['presentAddress']?></textarea>

            <br><br>

            <b>Permanent Address : </b>
            <br>
            <textarea name="permanentAddress" class="info"><?php echo $_SESSION['permanentAddress']?></textarea>

            <br><br>

            <b>Phone : </b><input type="tel" name="num" class="info" value=<?php echo $_SESSION['num']?>>

            <br><br>

            <b>Email : </b><input type="email" name="email" class="info" value=<?php echo $_SESSION['email']?>>

            <br><br>

            <input type="submit" name="update" class="submit" value="UPDATE">
    </form>
    <p id="message"></p>

    <br><br>
    <?php include "footer.php" ?>
</body>

</html>