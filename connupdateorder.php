<?php
session_start();
if(isset($_GET['i']) && isset($_POST["quantity"]))
{
  $cart=$_SESSION["cart"];
  
  $cart[$_GET["i"]]["quantity"]=$_POST["quantity"];
  $_SESSION["cart"]=$cart;
}
header("location:menucart.php");
