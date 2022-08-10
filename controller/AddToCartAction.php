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
		$isValid = false;
		$res=false;
		var_dump((int)$_POST['quantity']);

		if (empty($_POST['quantity'])) 
		{
			$isValid=false;
			$submit=false;
			echo "true";
			header("Location:../view/Home.php");
		}

		else if (((int)$_POST['quantity'])===0 or ((int)$_POST['quantity'])<0)
		{
			$isValid=false;
			$submit=false;
			header("Location:../view/Home.php");
		}

		else if($_POST['medName']==="Select a value")
		{

			$isValid =false;
			$submit=false;
			header("Location:../view/Home.php");
		}
		else 
		{
			$isValid =true;
			$submit=true;
		}
		///////////////////////////////////////////////////////////////////////
		if ($isValid)
		{
			include "dbConnect.php";

			$sql = "SELECT * FROM product WHERE MedicineName=?";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param("s", $_POST['medName']);
			$response = $stmt->execute();

			if ($response)
			{
				$data=$stmt->get_result();
				echo "<br><br>";
				if($data->num_rows>0)
				{
					while ($row = $data->fetch_assoc())
					{
						$MedicineCode=$row["MedicineCode"];
						$MedicinePrice=$row["MedicinePrice"];

					}
				}
				else
			    {
			    	header("Location:../view/Home.php");
			    }
			}

			

			$Totalprice=$_POST['quantity']*(float)$MedicinePrice;
			$_SESSION['GrandTotal']=$Totalprice+$_COOKIE[$_SESSION['username']];
			//$_COOKIE['username']=$Totalprice+$_COOKIE['username'];
			setcookie(setcookie($_SESSION['username'], $_SESSION['GrandTotal'], time() + (86400 * 30), "/"));
			$sql = "INSERT INTO cart(MedicineCode, MedicineName, MedicinePrice, Quantity, TotalPrice) VALUES (?,?,?,?,?)";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param("sssss", $MedicineCode, $_POST['medName'],$MedicinePrice,$_POST['quantity'],$Totalprice);
			$response = $stmt->execute();

			if($response)
			{
				$sql= "SELECT * FROM cart WHERE OrderNumber=( SELECT MAX(OrderNumber) FROM cart)";
	
				$stmt=$connection->prepare($sql);
				$response = $stmt->execute();
				if ($response)
				{
					$data=$stmt->get_result();
					while ($row = $data->fetch_assoc())
					{
						$OrderNumber=$row["OrderNumber"];
					}
					if ($OrderNumber===1)
					{
						$_COOKIE[$_SESSION['MedicineCode']]= $MedicineCode;
						$_COOKIE[$_SESSION["Quantity"]]=$_POST['quantity'];
						setcookie(setcookie($_SESSION['MedicineCode'], $_COOKIE[$_SESSION['MedicineCode']], time() + (86400 * 30), "/"));
						setcookie(setcookie($_SESSION["Quantity"], $_COOKIE[$_SESSION["Quantity"]], time() + (86400 * 30), "/"));
					}

					else
					{
						$_COOKIE[$_SESSION['MedicineCode']]= $_COOKIE[$_SESSION['MedicineCode']].", ".$MedicineCode;
						$_COOKIE[$_SESSION["Quantity"]]= $_COOKIE[$_SESSION["Quantity"]].", ".$_POST["quantity"];
						setcookie(setcookie($_SESSION['MedicineCode'], $_COOKIE[$_SESSION['MedicineCode']], time() + (86400 * 30), "/"));
						setcookie(setcookie($_SESSION["Quantity"], $_COOKIE[$_SESSION["Quantity"]], time() + (86400 * 30), "/"));
						var_dump($_COOKIE[$_SESSION['MedicineCode']]);
					}

				}
				header("location:../view/Home.php");
			}

			else
			{
				echo "Error while adding.";
				header("location:../view/Home.php");
			}

		}
		

	}
?>