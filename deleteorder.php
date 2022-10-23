<?php
session_start();
if(isset($_GET['i'])){
$foodid=$_GET['i'];
$cart=$_SESSION["cart"];
$conn =new mysqli("localhost","Cynthia","ME@2002colletteily!","btb_restaraunt");
$sql_search = "SELECT orderid FROM tblorder WHERE foodid = '$foodid'  ORDER BY orderid DESC LIMIT 1";
$search= $conn->query($sql_search)->fetch_assoc()['orderid'];

$sql="DELETE FROM  tblorder WHERE orderid='$search'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location: menucart.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
if(isset($cart[$foodid]))
{
  unset($cart[$foodid]);
  $_SESSION["cart"]=$cart;
}
header("location:orderss.php");
header("location:menucart.php");
}
 ?>
