<?php

session_start();

$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "12345678";
$DATABASE_NAME = "houses";

$con =mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno() ) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql1 = "CREATE TABLE user (
    id INT(5) UNSIGNED AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(20)  NOT NULL,
    CONSTRAINT PK PRIMARY KEY (id,username)
      )";

// $sql = "CREATE TABLE house (
//     house_id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     city VARCHAR(30),
//     availability VARCHAR(50),
//     price VARCHAR(30),
//     square_meters INT(4)
//     )";

$sql = "CREATE TABLE `house` (
    `house_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
    `city` varchar(30) DEFAULT NULL,
    `availability` varchar(50) DEFAULT NULL,
    `price` varchar(30) DEFAULT NULL,
    `square_meters` int(4) DEFAULT NULL,
    `username` varchar(30) NOT NULL,
    `id` int(5) unsigned DEFAULT NULL,
    PRIMARY KEY (`house_id`),
    KEY `username` (`username`),
    KEY `id` (`id`),
    CONSTRAINT `house_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4";


if($con->query($s1) === TRUE) {
    echo "Tables created succesfully!";
} else {
    echo "Error creating a table" . $con->error;
}

$con->close();

?>