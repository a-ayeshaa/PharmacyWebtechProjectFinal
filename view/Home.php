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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JS/JSLogout.js"></script>
    <link rel="stylesheet" href="CSS/Home.css">
    <script src="JS/JSValid.js"></script>
    <script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $(".cart").slideToggle();
        });
    });
    </script>
</head>

<body>

    <?php include "../controller/userinfo.php" ?>


    <h2 id="head">HOME</h2>

    <?php include "header.php";

	?>
    <p id="head">Welcome, <?php echo strtoupper($_SESSION['username'])?></p>

    <br>
    <?php include "JS/JSSlideCart.php" ?>
    <div class="Home">
        <form name="AddToCart" action="../controller/AddToCartAction.php" method="POST"
            onsubmit="return isValidATC(this);">
            <label id="head">AVAILABLE MEDICINE LIST : </label>

            <h5>
                <label for="medName">Select Medicine :</label>
                <select name="medName" class="info">
                    <option>Select a value</option>
                    <?php
			        include "dbConnect.php";

					$sql= "SELECT * FROM product";
					
					$stmt=$connection->prepare($sql);
					$response = $stmt->execute();

					if ($response)
					{
						$data=$stmt->get_result();
						while ($row = $data->fetch_assoc())
						{
							$med=$row["MedicineName"];;
		                	echo "<option value=".$med.">$med</option>";
		            	}
		            }
		         ?>
                </select>
                <label for="quantity">Quantity :</label>
                <input type="text" name="quantity" class="info" value="">

                <input type="submit" name="addtocart" value="ADD TO CART" class="submit">
            </h5>
        </form>
        <p id="message"></p>
        <br>
        <p id="message1"></p>
        <?php include "../controller/productinfo.php" ?>
    </div>
    <br><br>
    <?php include "footer.php" ?>
    </h5>
</body>

</html>