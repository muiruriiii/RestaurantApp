<!DOCTYPE html>
<html>
<head>
<title> Upload Image</title>
</head>
<body>
<form action="connproducts.php"method="POST" enctype="multipart/form-data">
<label for="fooditem">Food Name:</label><br>
<input type="text"name="fooditem" required="true" placeholder="Food Item Name"/><br></br>

<label for="foodimage">Image:</label><br>
<input type="file"name="food-image" id="foodimage" required="true"><br/></br/>

<label for="foodprice">Price:</label><br>
<input type="number"name="price"id="foodprice" required="true"><br/></br/>

<input type="submit"name="submitImage"value="SAVE">
</form>
</body>
</html>
