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
$sku = $_POST["product_sku"];
$name = $_POST["product_name"];
$price = $_POST["product_price"];
$disc_size = $_POST["disc_size"];
$height=$_POST["product_height"];
$width = $_POST["product_width"];
$length = $_POST["product_length"];
$weight = $_POST["product_weight"];

$sql = "INSERT INTO products (SKU, name, price, disc_size, height, width, length, weight )
VALUES ('$sku', '$name', '$price', '$disc_size', '$height','$width','$length','$weight' )";

if ($link->query($sql) === TRUE) {
    echo " New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>





<h1> Save save money</h1>