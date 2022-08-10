<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:Logout.php");
	}
?>

<?php
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		$isValid = false;
		$res=false;

		if (empty($_POST['firstName'])||empty($_POST['lastName'])||empty($_POST['gender'])||empty($_POST['DoB'])||empty($_POST['religion'])||empty($_POST['presentAddress'])||empty($_POST['permanentAddress'])||empty($_POST['num'])||empty($_POST['email'])) 
		{
			$isValid = false;
			$submit=false;
		}
		else 
		{
			$isValid = true;
			$submit=true;
		}
		include "dbConnect.php";

		if($isValid){

			$_SESSION['firstName']=$_POST['firstName'];
			$_SESSION['lastName']=$_POST['lastName'];
			$_SESSION['gender']=$_POST['gender'];
			$_SESSION['DoB']=$_POST['DoB'];
			$_SESSION['religion']=$_POST['religion'];
			$_SESSION['presentAddress']=$_POST['presentAddress'];
			$_SESSION['permanentAddress']=$_POST['permanentAddress'];
			$_SESSION['num']=$_POST['num'];
			$_SESSION['email']=$_POST['email'];

			$sql = "UPDATE userinfo SET firstname=?,lastname=?,gender=?,doB=?,religion=?,presentAddress=?,permanentAddress=?,phone=?,email=? WHERE username=?";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param("ssssssssss", $_SESSION['firstName'], $_SESSION['lastName'],$_SESSION['gender'],$_SESSION['DoB'],$_SESSION['religion'],$_SESSION['presentAddress'],$_SESSION['permanentAddress'],$_SESSION['num'],$_SESSION['email'], $_SESSION['username']);
			$response = $stmt->execute();
			if($response)
				{
					header("location:../view/Profile.php");
				}

		}


		else
		{
			echo "Please fill up all the information";
		}
		
	}

?>
<br><br>
<a href="../view/UpdateProfile.php"> Try again </a>