<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{
        text-align: center;
    }
    </style>
</head>
<body>

    <h2> Profile</h2>

    <h2> <?php echo $_SESSION['name']; ?></h2>
    <h2> <?php echo $_SESSION['gender']; ?></h2>
    <h2> <?php echo $_SESSION['phone']; ?></h2>
    <h2> <?php echo $_SESSION['birthday']; ?></h2>
    Click here to <a href = "logout.php">Logout</a>

</body>
</html>
