<?php
$userid=$_GET['i'];
echo $userid;
$conn =new mysqli("localhost","Cynthia","ME@2002colletteily!","btb_restaraunt");
$sql="DELETE FROM  register WHERE userid='$userid'";
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location: dashboard.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
 ?>
