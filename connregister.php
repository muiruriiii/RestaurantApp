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

$sql_table="CREATE TABLE register( userid INT(8) AUTO_INCREMENT PRIMARY KEY ,firstname VARCHAR(30) NOT NULL ,lastname VARCHAR(30) NOT NULL,email VARCHAR(30) NOT NULL,telno INT(10) NOT NULL,password VARCHAR(10) NOT NULL,confirm_password VARCHAR(10) NOT NULL)";

$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["email"];
$telno=$_POST["telno"];
$password=$_POST["pwd"];

$usertype=$_POST["usertype"];

$sql_insert="INSERT INTO register(firstname,lastname,email,telno,password,usertype) VALUES ('$firstname','$lastname','$email','$telno','$password','$usertype')";


if($conn->query($sql_insert)===TRUE){
  header('Location: http://localhost/food_web/home.php');
  echo "Data inserted ";
}else{
   "Error in inserting data".$conn->error;
}
 ?>
