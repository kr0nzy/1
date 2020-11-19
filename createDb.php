<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'sw_test';

$link = mysqli_connect($host, $user, $password );
if (!$link) {
    die('Could not connect: ' . mysql_error());
} else {
	echo 'Sanaca';
}

// Make my_db the current database
$db_selected = mysqli_select_db($link, $dbName);

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  $sql = 'CREATE DATABASE ' . $dbName;

  if (mysqli_query($link, $sql)) {
      echo 'Database ' . $dbName .  ' created successfully';
  } else {
      echo 'Error creating database';
  }
} else {
	echo '</br>Database already exists';
}

$createsql = 'CREATE TABLE products (
	product_id int(8) auto_increment PRIMARY KEY,
	sku varchar(20) NOT NULL,
	name varchar(30) NOT NULL,
	price float(10,2) NOT NULL,
	disc_size varchar(6),
	height varchar(10),
	width varchar(10),
	length varchar(10),
	weight varchar(10),
)';

$db_selected = mysqli_select_db($link, $dbName);

if (mysqli_query($link, $createsql)) {
      echo 'Created table products sucessfuly';
  } else {
      echo 'Error creating table';
	  die(mysqli_error($link));
  }

mysqli_close($link);
