<?php
session_start();

include('config.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = $db->prepare("SELECT * FROM user WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo "Username password combination is wrong";
    } else {
        if ($password == $result['password']) {
            // $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "you have logged in";
            header('Location: /index.php');
        } else {
            echo "User does not exist";
        }
    }
}
?>