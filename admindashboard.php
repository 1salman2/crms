<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admindashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="./pics/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <img src="./pics/Logo.png">
    </div>
        <div class="center">
            <ul class="navbar1">
                <li><a href="addcar.php">ADD CAR</a></li>
                <li><a href="deletecar.php" >DELETE CAR</a></li>
                <li><a href="status.php" >STATUS</a></li>
                <li><a href="logout.php" >LOGOUT</a></li>
            </ul>
            <img src="./pics/imag.png" id="image">
            <div class="info">
            <?php
                echo "Admin";
            ?>
            </div>
           
        </div>
</body>
</html>