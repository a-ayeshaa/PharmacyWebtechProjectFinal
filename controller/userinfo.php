<?php
	include "dbConnect.php";

	$sql= "SELECT * FROM userinfo WHERE username=?";
	$stmt = $connection->prepare($sql);
	$stmt->bind_param("s", $_SESSION['username']);

	$response = $stmt->execute();

	if ($response)
	{
		$data=$stmt->get_result();
		while ($row = $data->fetch_assoc())
		{
			$_SESSION['firstName']=$firstName=$row["firstname"];
			$_SESSION['lastName']=$lastName=$row["lastname"];
			$_SESSION['email']=$email=$row["email"];
			$_SESSION['gender']=$gender=$row["gender"];
			$_SESSION['religion']=$religion=$row["religion"];
			$_SESSION['num']=$contact=$row["phone"];
			$_SESSION['DoB']=$DoB=$row["doB"];
			$_SESSION['presentAddress']=$presentAddress=$row["presentAddress"];
			$_SESSION['permanentAddress']=$permanentAddress=$row["permanentAddress"];
			$_SESSION['password']=$row["password"];
		}
	}


?>