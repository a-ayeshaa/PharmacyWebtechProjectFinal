<?php
	session_start();
?>
<?php
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		$flag=false;
		if(($_POST['vDoB'] === $_SESSION['DoB']) and ($_POST['vEmail'] === $_SESSION['recoveryEmail']) and ($_POST['vColor']===$_SESSION['color']))
		{
			if($_POST['npassword']===$_POST['cpassword'])
			{
				$flag=true;
			}
		}


		if ($flag)
		{
			include 'dbConnect.php';
			$sql = "UPDATE userinfo SET password=? WHERE username=?";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param("ss", $_POST['npassword'],$_SESSION['username']);
			$response = $stmt->execute();
			if ($response)
			{
				header("location:Logout.php");
			}
		

		}
		else 
		{
			echo "<br>";
			echo "INFORMATION DOES NOT MATCH.";
			echo "<br><br>";
		}

	}
?>
<a href="../view/RequestPassword.php"> Return to previous page </a>
