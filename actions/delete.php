<?php
include('config.php');


if(isset($_GET['house_id'])) {
    
    $house_id = $_GET['house_id'];
    $sql = 'DELETE FROM house WHERE house_id = :house_id';
    // mysqli_query($db, "DELETE FROM house WHERE house_id=$house_id");
    // $_SESSION['message'] = "Deleted";
    $stmt = $db->prepare($sql);
    $stmt->execute([':house_id' => $house_id]);
    
    if ($stmt) {
        header('Location: /index.php');
    }
}


?>