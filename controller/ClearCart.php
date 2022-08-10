<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>

<?php
	include "dbConnect.php";

	$sql= "DELETE FROM cart";

	$stmt=$connection->prepare($sql);
	$response = $stmt->execute();

	if ($response)
	{
		$_SESSION['GrandTotal']=0;
		setcookie($_SESSION['username'], $_SESSION['GrandTotal'], time() + (86400 * 30), "/");
		$_SESSION['MedicineCodes']="";
		setcookie("MedicineCode", $_SESSION['MedicineCodes'], time() + (86400 * 30), "/");
		$_SESSION["Quantities"]="";
		setcookie("Quantity", $_SESSION["Quantities"], time() + (86400 * 30), "/");
		$sql="ALTER TABLE cart AUTO_INCREMENT = 1";
		$stmt=$connection->prepare($sql);
		$response = $stmt->execute();
		header("Location:../view/Home.php");
	}
	
?>