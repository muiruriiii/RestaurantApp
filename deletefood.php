<?php
$foodid=$_GET['i'];
echo $foodid;
$conn =new mysqli("localhost","Cynthia","ME@2002colletteily!","btb_restaraunt");
$sql="DELETE FROM  menu WHERE foodid='$foodid'";
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location: inventory.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
 ?>
