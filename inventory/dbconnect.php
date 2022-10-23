<?php
function connect()
{
$dbserver="localhost";
$dbuser="Cynthia";
$dbpassword="ME@2002colletteily";
$dbname="btb_restaraunt";
$conn=mysqli_connect("localhost","Cynthia","ME@2002colletteily!","btb_restaraunt")or die("Could not connect");
return $conn;
}
// if($conn->connect_error){
//   die("Not connected".$conn->connect_error);
// }
function getData($sql)
{
  $conn=connect();
  $result=mysqli_query($conn,$sql);

  while($row=mysqli_fetch_query($result,MYSQLI_ASSOC))
  {
    $rows[]=$row;
  }
  return $rows;
}
function setData($sql){
  $conn=connect();
  if(mysqli_query($conn,$sql))
  {
    return true;
  }
}

  ?>
