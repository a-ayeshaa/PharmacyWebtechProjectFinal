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
    <title>HISTORY</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JS/JSLogout.js"></script>
    <link rel="stylesheet" href="CSS/Home.css">
    <script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $(".history").slideToggle("slow");
        });
    });
    </script>
</head>

<body>
    <h2 id="head">CART</h2>
    <?php include "header.php"?>

    <br><br>
    <form>
        <h5><input type="text" class="info" size="30" onchange="showResult(this.value);">
            <b>Search Using OrderID</b>
        </h5>
        <br><br>
        <div id="txtHint"></div>
        <!-- 			<table id="t1">
				<tbody id="txtHint"></tbody>
			</table> -->
    </form>
    <?php include "JS/JSSearch.php" ?>
    <br><br>
    <?php include "JS/JSViewHistory.php" ?>

    </h5>
    <br><br>
    <?php include "footer.php" ?>
</body>

</html>