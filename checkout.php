<?php
require("connect.php");
$sql_select="SELECT * FROM shopping_cart ";

$result=$conn->query($sql_select);
// print_r($result);
session_start();
$total_price=0;

    foreach ($_SESSION["cart"] as $id => $item)
    {

      $total_price +=$item["quantity"]*$item["price"];

    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style2.css">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@300&family=Scope+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=PT+Sans&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Jomhuria&family=PT+Sans&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

  <title>BTB |Checkout Page</title>
  <h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>
  <h2 style="text-align:right;"><a href="admin.php"class="uglyph">Admin</a></a> | <a href="register.php"class="uglyph">User &ensp;</a></h2>
<h2 style="text-align:right;"><a href="logout.php"class="uglyph">Log Out &ensp;</a></h2>
</head>
  <body style="background-color:#ffe6e6">
    <nav>


      <i class="glyphicon glyphicon-user"></i>
     <a class="links" href="home.php">HOME</a>

     <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="menucart.php">MENU</a>

    <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="userprofile.php">USER PROFILE</a>

    <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="gallery.php">GALLERY</a>

    <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="contact.php">CONTACT</a>

    <!-- <i class="glyphicon glyphicon-user"></i>
    <a class="links" href="register.html">ACCOUNT</a> -->

    </nav>
    <h2>
    <p style="text-align:center;">
    Welcome <?= $_SESSION['user']['firstname']; ?>
    &ensp;<br>
    Your order is being processed.
    <br>
  The total payment is <?= "KSH ". $total_price; ?>
    &ensp;
    </p>
    </h2>
      <br>
<h2 style="text-align:center;"> <a href="order.php"class="rlogin">ORDER INFORMATION</a></h2>
<hr></hr>
  <br>

  <nav>

  <h2 class="subtitle">PERSONAL INFORMATION</h2>
  </nav>
    <form class="left" method="post" action="connpersonal.php">
      <header style="text-align:center;">
        <p>The following details are necessary for the success of your delivery!</p>
        </header>
            <br>
  <label for="fname">First Name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <br>
  <label for="fname">Last Name:</label>
  <input type="text" id="fname" name="lname"><br><br>
  <br>
  <label for="lname"> Email:</label>
  <input type="text" id="fname" name="email"><br><br>
  <br>
  <label for="lname"> Tel No:</label>
  <input type="text" id="fname" name="telno"><br><br>
  <br>
  </form>

  <nav>
  <h2 class="subtitle">DELIVERY</h2>
  </nav>

      <form class="left"method="post" action="conndelivery.php">

        <header style="text-align:center;">
          <p>Your order will be delivered to your selected address</p>
        <label for="myDate">Choose date and time of delivery:</label>
      <p>  <input type="date" name="myDate" min="2021-08-04" value="2021-08-04"id="myDate"></p>
        <p>  <input type="time" name="myDate" min="07:00" max="21:00" value="07:00"id="myDate"></p>
        </header>
<br>
    <label for="fname">Street:</label>
    <input type="text" id="fname" name="street"><br><br>
    <br>
    <label for="fname">Area:</label>
    <input type="text" id="fname" name="area"><br><br>
    <br>
    <label for="lname"> Floor/Apt Name:</label>
    <input type="text" id="fname" name="aptname"><br><br>
    <br>
    <label for="lname"> Company:</label>
    <input type="text" id="fname" name="company"><br><br>
    <br>
    <textarea id="subject" name="additionalinfo"rows="4" cols="50" placeholder="You can give additional delivery instructions..."></textarea>
    <br></br>

    </form>

    <nav>
    <h2 class="subtitle">PAYMENT</h2>
    </nav>

        <form class="left" method="post" action="conndelivery.php">
          <header style="text-align:center;">
            <p>Choose your preferable means of payment</p>
            </header>
            <br>
          <header style="border:solid;">
          <input type="radio" id="cash" name="cash" value="cash">
    <label for="cash">Cash on Delivery</label><br>
    <br><br>
    </header>
    <br><br>
        <header style="border:solid;">
    <input type="radio" id="mpesa" name="mpesa" value="mpesa">
    <label for="mpesa"> MPESA</label><br>
      <br><br>
      </header>
      <br><br>
        <header style="border:solid;">
    <input type="radio" id="card" name="card" value="card">
    <label for="card"> Card</label>
      <br><br>
      </header>

      <div class="btn_menu">
      <button type="submit" name="checkoutbtn" style="transform: translate(500%, 50%);"class="vmenu1">CHECKOUT</button>
      </div>
      <br><br>


</form>



  </body>
</html>
