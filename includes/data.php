<?php
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