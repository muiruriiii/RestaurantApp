<?php
require("connect.php");
if(isset($_POST['updatebtn']))
{

  $userid=$_POST['userid'];
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['pwd'];
  $usertype=$_POST['usertype'];
$sql="UPDATE register set firstname='".$firstname."', lastname='".$lastname."', email='".$email."', password='".$password."',
 usertype='".$usertype."' WHERE userid='".$userid."'";
if (mysqli_query($conn, $sql))
 {
  echo "Record updated successfully";
  header("location: dashboard.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
 ?>
