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
    <title>BTB |Register Page</title>
      <h1 class="title"><a href="home.php" class="link">BETWEEN TWO BUNS</a></h1>

  </head>
  <body style="background-color:#ffe6e6">

<!-- <img class="img_avatar" src="avatar.png"> -->
<!--
<div class="sidenav">
           <i class="glyphicon glyphicon-user"></i>
          <a class="links" href="home.php"class="active">HOME</a>

          <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="menucart.php">MENU</a>

         <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="gallery.php">GALLERY</a>

         <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="contact.php">CONTACT</a>

         <i class="glyphicon glyphicon-user"></i>
         <a class="links" href="order.php">ORDER</a>

         </nav>
       </div> -->

<h2 style="text-align:right;"><a href="register.php"class="rlogin">REGISTER</a>&ensp;|<a href="login.php"class="rlogin">LOGIN</a></h2>
<br><br>
<br><br>
<div class="container2">

          <form class="centered2"method="post" action="connregister.php">

<br><br>
<br><br>
<style>
.txt{
  width:90%;
  height:5%;
  border:1px solid brown;
  border-radius: 05px;
  padding: 10px 10px 10px 10px;
  margin: 10px 0px 15px 0px;
}

</style>
<div>
 <label for="fname"> First Name:</label>
   <input type="text"class="txt" id="fname" name="fname"><br><br>
</div>

<div>
 <label for="lname"> Last Name:</label>
  <input type="text"class="txt"  id="fname" name="lname"><br><br>
</div>
<div>
  <label for="email"> Email:</label>
<input type="text" class="txt" id="fname" name="email"><br><br>
</div>
 <label for="telno"> Tel No:</label>
  <input type="text"class="txt"  id="fname" name="telno"><br><br>
<div>
 <label for="pwd">Password:</label>
 <input type="password"class="txt"  id="pwd" name="pwd" minlength="8"><br><br></td>
</div>
<div>
  <label for="pwd">Confirm Password:</label>
 <input type="password"class="txt"  id="pwd" name="pwd" minlength="8"><br><br></td>
</div>

<input type="hidden" name="usertype" value="user">
<div class="btn_menu">
<button type="submit" name="registerbtn" style="transform: translate(-50%, 50%);"class="vmenu2">REGISTER</button>
</div>

</form>

</div>



</div>

  </body>

</html>
