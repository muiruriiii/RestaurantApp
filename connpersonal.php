<?php
//require_once("connect.php");

$conn =new mysqli("localhost","Cynthia","ME@2002colletteily!","btb_restaraunt");

if($conn->connect_error){
  die("Not connected".$conn->connect_error);
}
else{
  echo "Connected Succesfully";
}

$sql="CREATE DATABASE btb_restaraunt";
$sql_table="CREATE TABLE personalinformation(customerid INT(8) AUTO_INCREMENT PRIMARY KEY ,firstname VARCHAR(30) NOT NULL ,lastname VARCHAR(30) NOT NULL,email VARCHAR(30) NOT NULL,telno INT(10) NOT NULL)";

// $firstname=$_POST["fname"];
// $lastname=$_POST["lname"];
// $email=$_POST["email"];
// $telno=$_POST["telno"];
//
// $sql_insert="INSERT INTO personalinformation(firstname,lastname,email,telno)VALUES('$firstname','$lastname','$email','$tel

if($conn->query($sql_table)===TRUE){
  header('Location: http://localhost/food_web/dashboard.php');
  echo "Data inserted ";
}else{
   "Error in inserting data".$conn->error;
}
 ?>
