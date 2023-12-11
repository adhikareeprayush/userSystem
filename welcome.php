<?php
    session_start();

    // if(!isset($_SESSION['username'])){
    //     header("location: index.php");
    // }

    $username = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Welcome Page</title>
</head>
<body>
    <div class="container">
        <div class="welcome">
            <h1>Welcome <?php echo $username; ?></h1>
            <a href="index.php">Logout</a>
        </div>
    </div>
</body>
</html>