<?php

$servername = "localhost";
$username = "root";
$password = "12345678";

$con = new mysqli($servername, $username, $password);

if ($con->connect_error) {
    die("Connection failed: " .$con->connect_error);
}

if($con->query($sql) === TRUE) {
    echo "Table user created succesfully!";
} else {
    echo "Error creating a table" . $con->error;
}

$con->close();

?>