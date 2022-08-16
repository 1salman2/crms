<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INVOICE</title>
        <link rel="stylesheet" href="./css/invoice.css">
        <link rel="icon" href="./pics/Logo.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    </head>
    <body>

    </body>
</html>
<?php
    session_start();
    $D=$_SESSION['Days'];
    $R=$_SESSION['rent'];
    $T=$D*$R;
    
    //echo 'Session is started';
    echo '<div class="return">
    <!-- <h1>INVOICE</h1> -->
    <img src="./pics/logo.png">
    <div class="cnic">
        <label for="cnic">FULL NAME: ' .$_SESSION["Fname"]; echo '</label>
    </div>
    <div class="pin">
        <label for="pin">CNIC: '.$_SESSION["Cnic"]; echo '<br><br>
            ADDRESS: ' .$_SESSION["Address"]; echo '<br><br>
            TELEPHONE: ' .$_SESSION["contact"]; echo '<br><br>
            DAYS: ' .$_SESSION["Days"]; echo '<br><br>
            CAR PIN: ' .$_SESSION["car_id"]; echo '<br><br>
            RENT: '.$T;
            echo '/- Rs<br>
        </label>
        <p><hr></p>
    </div>
    <div class="save">
        <button class="btn" download style="position: absolute;
        top: 458px;
        left: 239px;"><a href="dashboard.php">DOWNLOAD</a></button>
     </div>      
    </div>';
    session_unset();
    session_destroy();
    
    

?>

