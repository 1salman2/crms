<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./pics/Logo.png">
        <title>Status</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
    </head>
    <style type="text/css">
        .tbl
        {
            position: absolute;
            left: 430px;
        }
        table
        {
            font-family: 'Fira Sans', sans-serif;
            width: 90%;
            color: white;
            font-size: 18px;
            text-align: center;
        }
        body
        {
            background: url("./pics/status.jpg");
            background-size: cover;
            background-attachment: fixed;
        }

        th
        {
            color: white;
        } 

        h1
        {
            font-family: 'Fira Sans', sans-serif;
            text-align: center;
            color: white;
        }
        table, th, td
        {
            border: 2px solid white;
        }
    </style>
    <body>
        <h1>Status</h1>
        <div class="tbl">
            <table>
                <tr>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Address</th>
                    <th>Car Pin</th>
                    <th>Contact</th>
                </tr>
                <?php
                    $conn = mysqli_connect('localhost', 'root', "", 'crms');

                    $sql = "SELECT firstname, CNIC, address, Car_pin, contact from tbl_customer";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<tr><td>".$row["firstname"]."</td><td>".$row["CNIC"]."</td><td>".$row["address"].
                            "</td><td>".$row["Car_pin"]."</td><td>".$row["contact"]."</td></tr>";
                        }
                    }
                    else
                    {
                        echo "No result";
                    }
                ?>
            </table>
        </div>
    </body>
</html>