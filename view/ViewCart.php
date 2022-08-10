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
    <title>Cart</title>
    <script src="JS/JSLogout.js"></script>
    <link rel="stylesheet" href="CSS/Home.css">

</head>

<body>
    <h2 id="head">CART</h2>
    <?php include "header.php"?>
    <form action="../controller/ConfirmOrderAction.php" method="POST">
        <?php
			include "../controller/cartinfo.php";
		?>
        <?php
	    	echo "<br><br>"; 
	    	//echo "GrandTotal = ".$_SESSION['GrandTotal']." Taka ";
	    	$cookie_name = $_SESSION['username'];
	    	if(!isset($_COOKIE[$cookie_name])) 
	    	{
			  echo "GrandTotal = "."0"." Taka ";
			  //setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			} 
			else {
			  echo "GrandTotal = ".$_COOKIE[$cookie_name]." Taka ";
			  //echo "Value is: " . $_COOKIE[$cookie_name];
			}
			?>
        <br><br>
        <a href="Home.php" class="link">Continue Shopping>> </a>
        <br><br><br><br>
        <input type="submit" name="Confirm" class="submit" value="Confirm Order">
        <br><br>
        <a href="../controller/ClearCart.php" class="link"> CLEAR CART </a>
        <br><br>
        <br><br>
        <?php include "footer.php" ?>
        </h5>
        <?php
		?>
    </form>

</body>

</html>