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
    <title>Profile</title>
    <script src="JS/JSLogout.js"></script>
    <link rel="stylesheet" href="CSS/Home.css">

</head>

<body>

    <h2 id="head">Profile</h2>
    <?php include "header.php"?>
    <br><br>
    <h3 id="head">PROFILE OF <?php echo strtoupper($_SESSION['username'])?></h3>

    <div class="pro">
        <fieldset class="field">
            <?php
		echo "<h5>";
		echo "First Name : "." ".$_SESSION['firstName'];
		echo "<br><br>";
		echo "Last Name : "." ".$_SESSION['lastName'];
		echo "<br><br>";
		echo "Gender : "." ".$_SESSION['gender'];
		echo "<br><br>";
		echo "Email : "." ".$_SESSION['email'];
		echo "<br><br>";
		echo "Date of Birth : "." ".$_SESSION['DoB'];
		echo "<br><br>";
		echo "Religion : "." ".$_SESSION['religion'];
		echo "<br><br>";
		echo "Contact Number : "." ".$_SESSION['num'];
		echo "<br><br>";
		echo "Present Address : "." ".$_SESSION['presentAddress'];
		echo "<br><br>";
		echo "Permanent Address : "." ".$_SESSION['permanentAddress'];
		echo "<br><br>";
		echo "</h5>";

	?>
        </fieldset>
    </div>
    <br><Br>
    <a href="UpdateProfile.php" class="link">Click here </a> to update your profile.
    <br><br>
    <?php include "footer.php" ?>

</body>

</html>