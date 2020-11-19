<html>
<head>
<link rel="stylesheet" type="text/css" href="./style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts.js"></script>
</head>
<body>
	<title>Product Add</title>

<div class="hederis"> 
	<h1>Product Add</h1>
	
	<input id="savebutton" type= 'button' value='Save' >
</div>
<hr/>

<form id="product-add-form" action="/newProject/add_product2.php"  class= "leibeli" onsubmit="return validateForm()" method="post">
    
    <label for="product_sku">SKU</label>
    <input id="product_sku" name="product_sku" type="text" required>

	<label for="product_name">Name</label>
    <input id="product_name" name="product_name" type="text" required>
	
	<label for="product_price">Price</label>
    <input id="product_price" name="product_price" type="text" required><br>
	
	<label class="tips" for="type_switcher">Type switcher</label>	
	<select id="type_switcher" name="product_type">TYPE SWITCHER</label>
		<option value="" disabled selected >Type switcher</option>
		<option value="dvd-disc">DVD-disc</option>
		<option value="book">Book</option>
		<option value="furniture">Furniture</option>
   </select>
	<ul class="hidden-inputs">
		<li class="dvd-disc-wrapper">
			<label for="disc_size">Size</label>
			<input id="disc_size" name="disc_size" type="text"/>
			<p>Enter disc size in megabytes</p>
		</li>
		<li class="furniture-wrapper">
			<label for="product_dimensions">Dimensions</label>
			<input id="product_dimensions" name="product_dimensions" type="text"/>
			<p>Please provide dimensions in HxWxL format.</p>
		</li>
		<li class="book-wrapper">
			<label for="product_weigt">Weight</label>
			<input id="product_weigt" name="product_weight" type="text"/>
			<p>Enter book weight</p>
		</li>
	</ul>
   <input type="submit" value="Save">
</form>
	
	
	
	
</body>
</html>