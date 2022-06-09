<?php

$conn = mysqli_connect("localhost","root","","cart");

// Check connection
if (!$conn) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "CREATE TABLE IF NOT EXISTS products(
  product_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(50) NOT NULL,
  product_price DECIMAL(10,2),
  product_img VARCHAR(125)
)";

if (mysqli_query($conn, $sql)) {
  $_SESSION['db']='connected';
  // echo "Table products created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

// ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
$table = "CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) UNSIGNED NOT NULL PRIMARY KEY,
  `product_name` varchar(50) NOT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `product_img` varchar(125) DEFAULT NULL
) 
";
// $sql = "INSERT INTO products (product_name, product_price)"
if (mysqli_query($conn, $table)) {
  $_SESSION['table']='table products created';
  // echo "Table products created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}