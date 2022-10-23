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

$sql_table="CREATE TABLE contact(firstname VARCHAR(30) NOT NULL ,lastname VARCHAR(30) NOT NULL,email VARCHAR(30) NOT NULL,telno INT(10) NOT NULL,feedback VARCHAR(30))";

$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["email"];
$telno=$_POST["telno"];
$feedback=$_POST["fdback"];

$sql_insert="INSERT INTO contact(firstname,lastname,email,telno)VALUES('$firstname','$lastname','$email','$telno','$feedback')";

if($conn->query($sql_insert)===TRUE){
  echo "Data inserted ";
    header('Location: http://localhost/food_web/home.php');
}else{
   "Error in inserting data".$conn->error;
}
 ?>
