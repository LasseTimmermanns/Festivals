<?php
include 'database_config.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  
$sql = "CREATE TABLE `festivals` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `festivalname` varchar(100) NOT NULL,
    `ort` varchar(100) NOT NULL,
    `preis` float NOT NULL,
    `erstellungsdatum` date NOT NULL DEFAULT curdate(),
    `datum` date NOT NULL,
    `color` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;";

if (mysqli_query($conn, $sql)) {
    echo "Table festivals created successfully";
  } else {
    echo "Error creating table festivals: " . mysqli_error($conn);
  }

  $sql = "CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(100) NOT NULL,
    `passwort` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table users: " . mysqli_error($conn);
} 

$sql = "INSERT INTO festivals.users (username,passwort)
    VALUES ('admin','adminpasswort');";

if (mysqli_query($conn, $sql)) {
    echo "User admin | adminpasswort created successfully";
} else {
    echo "Error creating user admin: " . mysqli_error($conn);
} 

mysqli_close($conn);
?> 