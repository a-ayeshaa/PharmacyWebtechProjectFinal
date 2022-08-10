<?php

	if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0)
	{
		$isValid = false;

		if (empty($_POST['username'])||empty($_POST['email'])) 
		{
			$isValid = false;
		}
		else 
		{
			$isValid = true;
		}
		if ($isValid)
		{
			include 'dbConnect.php';
			$sql = "SELECT * FROM userinfo WHERE username=? and email=?";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param("ss", $_POST['username'],$_POST['email']);
			$response = $stmt->execute();
			if ($response)
			{
				$data=$stmt->get_result();
				if ($row = $data->fetch_assoc())
				{
					session_start();
					$_SESSION['username']=$row['username'];
					$_SESSION['recoveryEmail']=$row['recoveryEmail'];
					$_SESSION['DoB']=$row['doB'];
					$_SESSION['color']=$row['favColor'];
					echo "true";
					header("Location:../view/RequestPassword.php");
				}
				else
				{
					echo "Incorrect Username or Email";
				}
			}
			
		}
		else 
		{
			echo "<br>";
			echo "You did not fill all the information.";
		}

	}
?>

<br><br>
<a href="../view/ForgetPassword.php"> Try again? </a>