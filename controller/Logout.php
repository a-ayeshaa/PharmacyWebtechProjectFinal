<?php

	session_start();
	include "dbConnect.php";

	$sql= "DELETE FROM cart";

	$stmt=$connection->prepare($sql);
	$response = $stmt->execute();

	if ($response)
	{
		$_SESSION['GrandTotal']=0;
		setcookie(setcookie($_SESSION['username'], $_SESSION['GrandTotal'], time() + (86400 * 30), "/"));
		$_SESSION['MedicineCodes']="";
		$_SESSION["Quantities"]="";
		$sql="ALTER TABLE cart AUTO_INCREMENT = 1";
		$stmt=$connection->prepare($sql);
		$response = $stmt->execute();
		header("Location:../view/Home.php");
	}
	session_unset();
	session_destroy();
	header("location:../view/LoginForm.php");

?>