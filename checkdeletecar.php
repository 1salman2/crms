<?php
    $pin = $_POST['pin'];

    $connection1=mysqli_connect('localhost','root',"",'crms');
    $query1="SELECT al.car_id FROM tbl_cars AS al WHERE al.car_id = $pin ";
    $result1=mysqli_query($connection1,$query1);
    $row=mysqli_num_rows($result1);
    if($row == 0)
    {
        echo "<script>
            alert('The car pin is not exist');
        </script>";
        echo "<script>
            location.href='deletecar.php';
        </script>";
    }
    else
    {
        $connection2=mysqli_connect('localhost','root',"",'crms');
        $query2="DELETE FROM tbl_cars WHERE tbl_cars.car_id = $pin";
        $result2=mysqli_query($connection2,$query2);
        if($result2)
        {
            //echo 'Deleted a row from tbl_cars <br>';
        }
        echo "<script>
                alert('Deleted Successfully!!');
            </script>";
        echo "<script>
            location.href='admindashboard.php';
        </script>";
    }

?>