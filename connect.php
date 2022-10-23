<?php
$conn =new mysqli("localhost","root","","btb_restaraunt")or die("Could not connect");

if($conn->connect_error){
  die("Not connected".$conn->connect_error);
}

  ?>
