<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="./pics/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner">
        <video autoplay muted loop>
            <source src="./videos/video.mp4" type="video/mp4"></video>
    </div>
    <div class="logo">
        <img src="./pics/Logo.png">
    </div>
        <div class="center">
            <ul class="navbar1">
                <li><a href="index.php">HOME</a></li>
                <li><a href="Popular_Car.php" >POPULAR CARS</a></li>
                <li><a href="Cars.php" >CARS</a></li>
                <li><a href="Booking.php" >BOOKING</a></li>
                <li><a href="return_car.php" >RETURN CAR</a></li>
                <li><a href="contact.php" >CONTACT US</a</li>
                <li><a href="about.php" >ABOUT US</a></li>
                <li><a href="logout.php" >Logout</a></li>
            </ul>
            <img src="./pics/imag.png" id="image">
            <div class="info">
            <?php
                $connect = mysqli_connect('localhost','root',"",'crms');
                $sql = "SELECT al.user_id FROM account_login AS al";
                $result = mysqli_query($connect,$sql);
                $num = mysqli_num_rows($result);

                $connection1=mysqli_connect('localhost','root',"",'crms');
                $query1="SELECT al.user_name from account_login as al where al.user_id='$num'";
                $result1=mysqli_query($connection1,$query1);
                if($result1)
                {
                    $UserName= mysqli_fetch_array($result1);
                    print_r($UserName['user_name']);
                    echo '<br>';
                }

                $connection2=mysqli_connect('localhost','root',"",'crms');
                $query2="SELECT al.email from account_login as al where al.user_id=$num";
                $result2=mysqli_query($connection2,$query2);
                if($result2)
                {
                    $Email = mysqli_fetch_array($result2);
                    print_r($Email['email']);
                }
            ?>
            </div>
           
        </div>
</body>
</html>