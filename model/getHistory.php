<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>
<?php 
	include "dbConnect.php";
	$sql= "SELECT * FROM billinghistory where username=?";
	
	$stmt=$connection->prepare($sql);
	$stmt->bind_param("s", $_SESSION['username']);
	$response = $stmt->execute();
	$cart= array();
	if ($response)
	{
		$data=$stmt->get_result();
		if ($data->num_rows > 0)
		{
			while($row = $data->fetch_assoc()) {
			array_push($cart, array('OrderID' => $row["OrderID"],'username' => $_SESSION['username'] ,'MedicineCodes' => $row["MedicineCodes"], 'Quantities' => $row["Quantities"], 'GrandTotal' => $row["GrandTotal"]));
			}
			echo json_encode($cart);
		}
	}
	else 
	{
		//echo "Login Failed.";
	}

?>