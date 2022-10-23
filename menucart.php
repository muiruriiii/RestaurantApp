<?php
session_start();
require("connect.php");
$sql="SELECT * FROM menu";
$results=$conn->query($sql);
// $_SESSION["cart"]=[];
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

<title>BTB |Menu Cart Page</title>
<link href="style.css" type="text/css" rel="stylesheet" />


  </head>
    <body style="background-color:#ffe6e6">
      <h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>
      <h2 style="text-align:right;"><a href="admin.php"class="uglyph">Admin</a></a> | <a href="register.php"class="uglyph">User &ensp;</a></h2>
<h2 style="text-align:right;"><a href="logout.php"class="uglyph">Log Out &ensp;</a></h2>
    <nav>

            <i class="glyphicon glyphicon-user"></i>
           <a class="links" href="home.php">HOME</a>

           <i class="glyphicon glyphicon-user"></i>
          <a class="links" href="index.php">MENU</a>

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
    &ensp;
    </p>
    </h2>
  <button style="background-color:black;"><a style="text-decoration:none;color:white;text-align:left;" href="checkout.php">Checkout</a></button>


<!-- Cart ---->
<div id="shopping-cart">
  <div class="txt-heading"><h2>Shopping Cart</h2></div>
  <a id="btnEmpty" href="menucart.php?action=empty">Empty Cart</a>
  <?php
    if(isset($_SESSION["cart"]) && count($_SESSION["cart"])) {
      ?>

  <table class="tbl-cart" cellpadding="10" cellspacing="1">
    <thead>
      <tr>
        <th style="text-align:left;">Foodid</th>
        <th style="text-align:left;">Foodname</th>
        <th style="text-align:right;" width="5%">Quantity</th>
        <th style="text-align:right;" width="10%">Unit Price</th>
        <th style="text-align:right;" width="10%">Price</th>
        <th style="text-align:center;" width="5%">Remove</th>
      </tr>
    </thead>
  <tbody>
    <?php
    $i=1;
    $total_price=0;
    $total_quantity = 0;
        foreach ($_SESSION["cart"] as $id => $item){
          $item_price = $item["quantity"]*$item["price"];
          $total_quantity +=$item["quantity"];
          $total_price +=$item_price;
      ?>
      <form method="POST" action="connupdateorder.php?i=<?php echo $id;?>">

				<tr>
          <input type="hidden" name="id" value="user">
          <input type="hidden" name="userid" value="user">
          	<td><?= $id; ?></td>
  				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["foodname"];?></td>
  				<td style="text-align:right;"><input type="number" value="<?php echo $item["quantity"]; ?>" name="quantity"/></td>
  				<td style="text-align:right;"><?php echo "KSH ".$item["price"]; ?></td>
  				<td style="text-align:right;"><?php echo "KSH ". number_format($item_price,2); ?></td>
  				<td style="text-align:center;">

              <td>
            <button type="submit">Edit</button>
              </td>
              <td>
                  <button type="submit">
            <a style="text-decoration:none;" href="deleteorder.php?i=<?php echo $id;?>">Delete</a>
            </button>
              </td>
            </tr>
            </a>
          </td>
				</tr>
        </form>
				<?php

            $i++;
      }
      ?>
      <tr>
        <td colspan="2" align="right">Total:</td>
        <td align="right"><?php echo $total_quantity; ?></td>
        <td align="right" colspan="2"><strong><?php echo "KSH".number_format($total_price, 2); ?></strong></td>
        <td></td>
      </tr>
      <?php
		} else {
      ?>
        <div class="no-records">Your Cart is Empty</div>
      <?php
    }
		?>
  </tbody>
  </table>
</div>

<div id="product-grid">
	<div class="txt-heading"><h2>Order Now!</h2></div>
	<?php
	$product= mysqli_query($conn,"SELECT * FROM menu ORDER BY foodid ASC");
	if (!empty($product)) {
		while ($row=mysqli_fetch_array($product)) {

	?>
		<div class="product-item">
			<form method="post" action="connmenucart.php">
				<input type="hidden" name="food_id" value="<?= $row['foodid'] ?>">
				<input type="hidden" name="price" value="<?= $row['foodprice'] ?>">
        	<input type="hidden" name="foodname" value="<?= $row['foodname'] ?>">
        <br><br>
			<div class="product-image"><img src="./inventory/<?=$row['imagepath']?>" style="width:15rem; height:15rem; object-fit:cover;"/></div>
      <br><br>
			<div class="product-tile-footer">
				  <br><br>
					  <br><br>
			<div name="foodname" class="product-title"><?=$row['foodname']?></div>
			<div class="product-price"><?=$row['foodprice']?></div>
      <br><br>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1"/>
				<input type="submit" name="btnAddtoCart" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
  }
else {
 echo "No Records.";

	}
	?>
</div>



</BODY>
</HTML>
