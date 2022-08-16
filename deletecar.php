<!DOCTYPE html>
<html lang="en">
<head>
    <title>Return Car</title>
    <link rel="stylesheet" href="./css/return_car.css">
    <link rel="icon" href="./pics/Logo.png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
</head>
<body>
    <form action="checkdeletecar.php" method="POST">
        <div class="return">
            <h1>Delete Car</h1>
            <div class="PPIN">
                <label >Enter Car Pin:</label>
                <input type="number" name="pin" placeholder=" Enter Car Pin" required>
            </div>
            <div class="save">
                <input class="btn" type="submit" value="SUBMIT"name="save">
            </div>
        </div>
    </form>
</body>
</html>