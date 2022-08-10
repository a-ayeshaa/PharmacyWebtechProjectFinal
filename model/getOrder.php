<?php
  session_start();
  if (count($_SESSION)===0)
  {
    header("location:../controller/Logout.php");
  }
?>
<?php
      include "dbConnect.php";

      $sql= "SELECT OrderID,MedicineCodes,Quantities,GrandTotal FROM billinghistory WHERE OrderID= ? and username= ?";
   
      $stmt=$connection->prepare($sql);
      $stmt->bind_param("ss", $_GET['q'], $_SESSION['username']);
      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result($OrderID, $MedicineCodes,$Quantities, $GrandTotal);
      $stmt->fetch();
      $stmt->close();

      if ($MedicineCodes===NULL) {
        echo "Not Found";
      }
      else
      {
        echo "<table>";
        echo "<tr>";
        echo "<th>OrderID</th>";
        echo "<th>MedicineCodes</th>";
        echo "<th>Quantities</th>";
        echo "<th>GrandTotal</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $OrderID . "</td>";  
        echo "<td>" . $MedicineCodes . "</td>";
        echo "<td>" . $Quantities. "</td>";
        echo "<td>" . $GrandTotal . "</td>";    
        echo "</tr>";
        echo "</table>";
      }
?>