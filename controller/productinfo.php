
<?php
	include "dbConnect.php";

	$sql= "SELECT * FROM product";
	
	$stmt=$connection->prepare($sql);
	$response = $stmt->execute();

	if ($response)
	{
		$data=$stmt->get_result();
		echo "<table>
	        <tr>
	        <th>Medicine Code</th>
	        <th>Medicine Name</th>
	        <th>Medicine Price</th>
	        <th>Expiry Date</th>
	        </tr>
	        ";
		while ($row = $data->fetch_assoc())
		{
        	$MedicineCode=$row["MedicineCode"];
        	$MedicineName=$row["MedicineName"];
        	$MedicinePrice=$row["MedicinePrice"];
        	$Expiry=$row["ExpiryDate"];
            echo "
            <tr>
            <td>$MedicineCode</td>
            <td>$MedicineName</td>
            <td>$MedicinePrice</td>
            <td>$Expiry</td>
            </tr>
            ";

		}
		echo "<br><br>";
	    echo "</table>";
	}

	else
	{
		echo "not found";
	}


?>