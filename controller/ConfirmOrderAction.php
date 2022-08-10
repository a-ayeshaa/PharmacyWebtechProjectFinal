<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:Logout.php");
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		// include "dbConnect.php";

		// $sql= "SELECT * FROM cart";

		// $stmt=$connection->prepare($sql);
		// $response = $stmt->execute();

		// if ($response)
		// {
		// 	$data=$stmt->get_result();

		// 	if ($data->num_rows>0)
		// 	{
		// 		while ($row = $data->fetch_assoc())
		// 		{
		// 			$OrderNumber=$row["OrderNumber"];
		//         	$MedicineCode=$row["MedicineCode"];
		   
		//         	$MedicinePrice=$row["MedicinePrice"];
		//         	$Quantity=$row["Quantity"];
		//         	$Total=$row["TotalPrice"];
		// 		}
		// 	}
		// }
		include "dbConnect.php";

		$sql ="INSERT INTO billinghistory(username, MedicineCodes, Quantities, GrandTotal) VALUES (?, ?, ?, ?)";
		$stmt = $connection->prepare($sql);
		$stmt->bind_param('ssss', $_SESSION['username'], $_COOKIE[$_SESSION["MedicineCode"]], $_COOKIE[$_SESSION["Quantity"]], $_COOKIE[$_SESSION['username']]);

		$response = $stmt->execute();

		if ($response) 
		{
			include "dbConnect.php";

			$sql= "DELETE FROM cart";

			$stmt=$connection->prepare($sql);
			$response = $stmt->execute();

			if ($response)
			{
				$_SESSION['GrandTotal']=0;
				setcookie(setcookie($_SESSION['username'], $_SESSION['GrandTotal'], time() + (86400 * 30), "/"));
				$_SESSION['MedicineCodes']="";
				setcookie(setcookie($_SESSION["MedicineCode"], $_SESSION['MedicineCodes'], time() + (86400 * 30), "/"));
				$_SESSION["Quantities"]="";
				setcookie(setcookie($_SESSION["Quantity"], $_SESSION["Quantities"], time() + (86400 * 30), "/"));
				$sql="ALTER TABLE cart AUTO_INCREMENT = 1";
				$stmt=$connection->prepare($sql);
				$response = $stmt->execute();
				header("Location:../view/OrderHistory.php");
			}
		}
		else 
		{
			var_dump($_COOKIE[$_SESSION["MedicineCode"]]);
			echo "Error while saving";
		}

		$connection->close();
	}
?>