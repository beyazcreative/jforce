<?php
include "connect/dbcon.php";
$me1 = $_POST["me1"];
$me2 = $_POST["me2"];
$me3 = $_POST["me3"];
$id = $_GET["id"];
$sql = "UPDATE menu SET m1 ='$me1',m2 ='$me2',m3 ='$me3' WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
      echo "komisyoncu eklendi";
} else {
      echo "Error: " . $sql . "<br>" ;
}
mysqli_close($conn);
?>