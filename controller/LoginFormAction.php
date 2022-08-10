
<?php
	if ($_SERVER["REQUEST_METHOD"] == 'POST') 
	{
		include "dbConnect.php";

		$sql = "SELECT * FROM userinfo WHERE username = ? and password = ?";
		$stmt = $connection->prepare($sql);
		$stmt->bind_param("ss", $username, $password);
		$username = $_POST['username'];
		$password = $_POST['password'];
		$response = $stmt->execute();

		if ($response) 
		{
			$data = $stmt->get_result();

			if ($data->num_rows > 0)
			{
				session_start();
				$_SESSION['username']=$_POST['username'];
				$_SESSION['MedicineCode']="c".$_POST['username'];
				$_SESSION['Quantity']="q".$_POST['username'];
				header("Location:../view/Home.php");
			}
			else 
			{
				echo "Login Failed.";
			}
		}
		else 
		{
			echo "Login Failed.";
		}
		

		$connection->close();
	}
?>


<br><br>

<a href="../view/LoginForm.php"> Return back to Login Page </a>