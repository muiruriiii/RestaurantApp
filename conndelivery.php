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

$sql_table="CREATE TABLE delivery(street VARCHAR(30) NOT NULL ,area VARCHAR(30) NOT NULL,aptname VARCHAR(30) NOT NULL,company VARCHAR(30),customerid INT, FOREIGN KEY (customerid) REFERENCES personalinformation(customerid))";

// $firstname=$_POST["fname"];
// $lastname=$_POST["lname"];
// $email=$_POST["email"];
// $telno=$_POST["telno"];
// $password=$_POST["pwd"];
// $confirm_password=$_POST["pwd"];
// $usertype=$_POST["usertype"];
//
// $sql_insert="INSERT INTO register(firstname,lastname,email,telno,password,confirm_password,usertype) VALUES ('$firstname','$lastname','$email','$telno','$password','$confirm_password','$usertype')";


if($conn->query($sql_table)===TRUE){

  echo "Data inserted ";
    header('Location: http://localhost/food_web/home.php');
}else{
   "Error in inserting data".$conn->error;
}
 ?>
