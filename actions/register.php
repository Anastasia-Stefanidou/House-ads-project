<?php
// session_start();
include('config.php');

if(isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT into user (username, email, password) VALUES (?,?,?)";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([$name, $email, $password]);
    if($result) {
        header('Location: /index.php');
    } else {
        echo "error";
    }
    $_SESSION['username'] = $name;
    $_SESSION['success'] = "You have logged in";
    header('location: /index.php');
}
?>