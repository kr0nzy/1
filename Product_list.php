<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'sw_test';

$link = mysqli_connect($host, $user, $password );
if (!$link) {
    die('Could not connect: ' . mysql_error());
} else {
	echo '';
}

// Make my_db the current database
$db_selected = mysqli_select_db($link, $dbName);
$sql = "SELECT sku, name, price, disc_size, height, width, length, weight FROM products";
$result = $link->query($sql);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="./style2.css">

</head>
<body>
	<title>Product List</title>

<div class="header"> 
	<h1>Product List</h1>
	
	
	<input id="applybutton" type= 'button' value='Apply' >
	
</div>

	
<hr/>
<ul>
	<?php
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo '<li>';
		echo '<p>' . $row['sku'] . '</p>';
		echo '<p>' . $row['name'] . '</p>';
		echo '<p>' . $row['price'] . '$</p>';
		echo '<p>' . $row['disc_size'] . '</p>';
		echo '<p>' . $row['height'] . '</p>';
		echo '<p>' . $row['width'] . '</p>';
		echo '<p>' . $row['length'] . '</p>';
		echo '<p>' . $row['weight'] . ' </p>';
		echo '</li>';
	}
} else {
    echo "0 results";
}
	?>
	
</ul>
