<?php
	session_start();
	if (count($_SESSION)===0)
	{
		header("location:../controller/Logout.php");
	}
?>

<?php
if($_SERVER['REQUEST_METHOD'])
{
    $isValid = false;

    if (empty($_POST['currentpassword'])||empty($_POST['npassword'])||empty($_POST['confirmpassword'])) 
    {
        $isValid = false;
    }
    else 
    {
        $isValid = true;
    }

    if($isValid)
    {

        if($_POST['currentpassword'] === $_SESSION['password'])
        {
            if($_POST['npassword'] === $_POST['confirmpassword'])
            {
                include 'dbConnect.php';
                $sql = "UPDATE userinfo SET password=? WHERE username=?";
                $stmt = $connection->prepare($sql);
                $stmt->bind_param("ss", $_POST['npassword'],$_SESSION['username']);
                $response = $stmt->execute();
                if ($response)
                {
                    header("location:../view/Home.php");
                }
            }
            else
            {
            	echo "Passwords do not match.";
            }
        }
        else
        {
    	   echo "Current password incorrect.";
        }
    }

    else
    {
        echo "Please fill up all the information";
    }

}
?>
<br><br>

<a href="../view/ChangePassword.php"> Return </a>