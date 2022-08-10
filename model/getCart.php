
<?php 
	include "dbConnect.php";
	$sql= "SELECT * FROM cart";
	
	$stmt=$connection->prepare($sql);
	$response = $stmt->execute();
	$cart= array();
	if ($response)
	{
		$data=$stmt->get_result();
		if ($data->num_rows > 0)
		{
			while($row = $data->fetch_assoc()) {
			array_push($cart, array('OrderNumber' => $row["OrderNumber"], 'MedicineCode' => $row["MedicineCode"], 'MedicineName' => $row["MedicineName"], 'MedicinePrice' => $row["MedicinePrice"], 'Quantity' => $row["Quantity"], 'TotalPrice' => $row["TotalPrice"]));
			}
			echo json_encode($cart);
		}
	}
	else 
	{
		//echo "Login Failed.";
	}

?>