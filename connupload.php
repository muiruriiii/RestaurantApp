<?php
require_once("connect.php");
if(isset($_POST["uploadbtn"]))
{
   $file=$_FILES["food-image"];
   print_r($file);
  $file_path="inventory/";
  $original_file_name=$_FILES['food-image']['name'];
  $file_tmp_location=$_FILES['food-image']['tmp_name'];


  move_uploaded_file( $file_tmp_location,  $file_path. $original_file_name);

  if(  move_uploaded_file( $file_tmp_location,  $file_path. $original_file_name))
  {


    $sql="INSERT INTO products(foodname,foodimage,foodprice) VALUES ('".$_POST["fooditem"]."','$original_file_name','".$_POST["price"]."')";
setData($sql);

// if(setData($sql))
// {
//   header("location:dashboard.php");
// }
  }
}


// $sql="CREATE DATABASE btb_restaraunt";
//
// $sql_table="CREATE TABLE products( foodid INT(8) AUTO_INCREMENT PRIMARY KEY ,foodname VARCHAR(30) NOT NULL ,foodimage VARCHAR(30) NOT NULL,foodprice INT(30) NOT NULL)";
//
// $foodname=$_POST["fooditem"];
// $foodimage=$_POST["food-image"];
// $foodprice=$_POST["price"];
//
// if($conn->query($sql_table)===TRUE){
//   // header('Location: http://localhost/food_web/dashboard.php');
//   echo "Data inserted ";
// }else{
//    "Error in inserting data".$conn->error;
// }
 ?>
