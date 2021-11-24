<?php

include('config.php');

$price = $_POST['price'];
$city = $_POST['city'];
$availability = $_POST['availability'];
$square_meters = $_POST['square_meters'];

$sql = "INSERT INTO house (city, availability, price, square_meters) VALUES (:city, :availability, :price, :square_meters)";

$stmt = $db->prepare($sql);

$stmt->execute(['city' => $city, 'availability' => $availability, 'price' => $price, 'square_meters' => $square_meters]);

if ($stmt) {
    header('Location: /index.php');
}

?>
