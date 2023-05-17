<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ekenedrinks_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$create_admins_table = "CREATE TABLE IF NOT EXISTS admins (
    admin_id INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    image VARCHAR(50) NOT NULL,
    passkey VARCHAR(50) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    access TINYINT(2) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$conn->query($create_admins_table);



$create_users_table = "CREATE TABLE IF NOT EXISTS users (
    user_id INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    image VARCHAR(50) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    token VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$conn->query($create_users_table);

$create_drinks_table = "CREATE TABLE IF NOT EXISTS drinks (
    drink_id INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    drink_name VARCHAR(50) NOT NULL,
    drink_image VARCHAR(50) NOT NULL,
    drink_description VARCHAR(500) NOT NULL,
    drink_price VARCHAR(50) NOT NULL,
    drink_category VARCHAR(50) NOT NULL,
    drink_status TINYINT(2) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
    $conn->query($create_drinks_table);

    
$create_orders_table = "CREATE TABLE IF NOT EXISTS orders (
    order_id INT(255) UNSIGNED AUTO_INCREMENT,
    user_id INT(255) UNSIGNED NOT NULL,
    order_address VARCHAR(250) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(order_id,user_id)
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$conn->query($create_orders_table);

$create_order_items_table = "CREATE TABLE IF NOT EXISTS order_items (
    order_item_id INT(255) UNSIGNED AUTO_INCREMENT,
    order_id INT(255) UNSIGNED NOT NULL,
    food_id INT(255) UNSIGNED NOT NULL,
    price DECIMAL(7,2) NOT NULL,
    quantity VARCHAR(7) NOT NULL,
    status TINYINT(2) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(order_item_id,order_id,food_id)
) CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci, ENGINE=InnoDB";
$conn->query($create_order_items_table);
?>
