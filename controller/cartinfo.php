
<?php
	include "dbConnect.php";

	$sql= "SELECT * FROM cart";
	
	$stmt=$connection->prepare($sql);
	$response = $stmt->execute();

	if ($response)
	{
		$data=$stmt->get_result();

		if ($data->num_rows>0)
		{
			echo "<table>
		        <tr>
		        <th>Order Number</th>
		        <th>Medicine Code</th>
		        <th>Medicine Name</th>
		        <th>Quantity</th>
		        <th>Price</th>
		        <th>Total Price</th>
		        </tr>
		        ";
			while ($row = $data->fetch_assoc())
			{
				$OrderNumber=$row["OrderNumber"];
	        	$MedicineCode=$row["MedicineCode"];
	        	$MedicineName=$row["MedicineName"];
	        	$MedicinePrice=$row["MedicinePrice"];
	        	$Quantity=$row["Quantity"];
	        	$Total=$row["TotalPrice"];
	            echo "
	            <tr>
	            <td>$OrderNumber</td>
	            <td>$MedicineCode</td>
	            <td>$MedicineName</td>
	            <td>$Quantity</td>
	            <td>$MedicinePrice</td>
	            <td>$Total</td>
	            </tr>
	            ";

			}
			echo "<br><br>";
		    echo "</table>";
		}
		else
		{
			header("Location:../view/Home.php");
			echo "not found";
		}
	}

?>