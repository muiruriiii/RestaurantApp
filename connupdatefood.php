<?php
require("connect.php");
if(isset($_POST['uploadbtn']))
{

  $foodid=$_POST['foodid'];
  $foodname=$_POST['name'];
  $fooddescription=$_POST['desc'];
$file=$_FILES["image"];
 $file_path="inventory/";
 $original_file_name=$_FILES['image']['name'];
 $file_tmp_location=$_FILES['image']['tmp_name'];

 move_uploaded_file( $file_tmp_location,  $file_path. $original_file_name);
  $foodprice=$_POST['price'];

$sql="UPDATE menu set foodname='".$foodname."', fooddescription='".$fooddescription."', imagepath='".$original_file_name."', foodprice='".$foodprice."' WHERE foodid='".$foodid."'";
// var_dump($sql);
// die;

if (mysqli_query($conn, $sql))
 {
  echo "Record updated successfully";
  header("location: inventory.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
 ?>
