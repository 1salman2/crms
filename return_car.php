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
    <form action="return.php" method="POST">
        <div class="return">
            <h1>Return Car</h1>
            <div class="CCNIC">
                <label>Enter Cnic:</label>
                <input type="text" name="cnic" placeholder="XXXXX-XXXXXXX-X" required>
            </div>
            <div class="PPIN">
                <label >Enter Car Pin:</label>
                <input type="number" name="pin" placeholder=" Enter Car Pin" required>
            </div>
            <div class="save">
                <input class="btn" type="submit" id="ss" onClick="thank()" name="save">
            </div>
        </div>
        <script>
            function thank()
            {
                var target=document.getElementById("ss");
                var new="<h3>THANK YOU</h3>";
                target.insert
            }
        </script>
    </form>
</body>
</html>