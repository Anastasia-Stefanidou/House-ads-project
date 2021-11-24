<?php
include('actions/config.php');

include('actions/login.php');
include('actions/register.php');
// session_start();
$query = "SELECT * FROM house";
$d = $db->query($query);

// if (isset($_SESSION['password'])) {
//     $password = $_SESSION['password'];
//     $d2 = $db->prepare("SELECT * FROM house WHERE password='$password' LIMIT 1");
//     $d2->execute();
//     $result = $d2->fetch(PDO::FETCH_ASSOC);
//     print_r($result);die;
// }

// if(!isset($_SESSION['email'])) { 
//     header("Location: login.php");
//     exit;
//  }

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "you have to log in first";
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <header class="header">
        <div class="header_right">
            <a class="active" href="login.php">Home</a>
        </div>
    </header> 
    <main>
        <?php if (isset($_SESSION['username'])) :  ?>
            <p class="title">Σύστημα διαχείρισης αγγελιών. (καλώς ήλθες <?php echo $_SESSION['username']; ?> )</p>
            <a href="actions/logout.php" tite="Logout">Logout.</a>
        <?php endif ?>
         <div class="flex-container">
            <div class="box left_section child">
                <p id="ok"></p>
                <form id="insertForm" action="actions/insert.php" method="post">
                    <ul class="flex-outer">
                        <li>
                            <label class= "col-sm-2 col-form-label" for="price">Τιμή:</label>
                            <input class="form-control" type="number" id="price" name="price">
                        </li>
                        <li>
                            <label class="col-sm-2 col-form-label" for="city">Περιοχή:</label>
                            <select class="select form-control" name="city" id="city">
                                <option value="Αθήνα">Αθήνα</option>
                                <option value="Θεσσαλονίκη">Θεσσαλονίκη</option>
                                <option value="Πάτρα">Πάτρα</option>
                                <option value="Ηράκλειο">Ηράκλειο</option>
                            </select>
                        </li>
                        <li>
                            <label class="col-sm-2 col-form-label" for="availability">Διαθεσιμότητα:</label>
                            <select class="select form-control" name="availability" id="availability">
                                <option value="ενοίκιαση">Ενοικίαση</option>
                                <option value="πώληση">Πώληση</option>
                            </select>
                        </li>
                        <li>
                            <label class="col-sm-2 col-form-label" for="square_meter">Τετραγωνικά:</label>
                            <input class="form-control" type="number" id="square_meter" name="square_meters">
                        </li>
                        <button id="btn" class="btn btn-primary mb-2" type="submit">Submit</button> 
                        <br />
                        <span id="response"></span>
                    </form>
                    </ul>
                <form action="actions/delete.php" method="post">
                    <input type="hidden" id="house_id" name="house_id" value="<?php echo $house_id; ?>">
                    <!-- <button type="submit" name="Delete">Delete</button>  -->
                </form>   
            </div>
            <div class="box right_section child">
                    <p class="underline">Λίστα αγγελιών:</p>
                    <div>
                        <?php foreach ($d as $data)
                            { 
                        ?>
                            <div class="inline-block"><?php echo $data['city'];?>, </div>
                            <div class="inline-block"><?php echo $data['availability'];?>, </div>
                            <div class="inline-block"><?php echo $data['price'];?> €, </div>
                            <div class="inline-block"><?php echo $data['square_meters'];?> τ.μ</div>
                            <a class="btn btn-danger" href="actions/delete.php?house_id=<?php echo $data['house_id']; ?>">Διαγραφή</a>
                        <?php
                        print "<br>" ;}
                        ?>
                    </div>
            </div>
        </div>
    </main>
    <footer><p>All rights reserved</p></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>