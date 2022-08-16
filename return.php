<?php

    $username = 'localhost';
    $root = 'root';
    $dbname = 'crms';
    $pass = '';
    $CarPin = $_POST["pin"];
    $Cnic = $_POST["cnic"];
    $Del = 0;

    
    $conn = mysqli_connect($username, $root, $pass, $dbname);
    $sql = "SELECT C.CNIC FROM tbl_customer AS C WHERE C.CNIC = '$Cnic' ";
    $result = mysqli_query($conn,$sql);
    $id = mysqli_num_rows($result);
    if($id===0)
    {
        echo '<script>
        alert("This Cnic does not exit");
        location.href="return_car.php";
        </script>';
    }
    else
    {
        $sql = "SELECT C.car_id FROM tbl_booking AS C WHERE C.car_id = '$CarPin' ";
        $result = mysqli_query($conn,$sql);
        $id = mysqli_num_rows($result);
        if($id===0)
        {
            echo '<script>
            alert("Invalid car pin");
            location.href="return_car.php";
            </script>';
        }
        else
        {

            $sql = "SELECT C.booking_id FROM tbl_booking AS C WHERE C.car_id = '$CarPin'";
            $res = mysqli_query($conn,$sql);
            $cus_id = mysqli_fetch_array($res);
            //if($cus_id)
            //{
                //echo $cus_id[0];
            //}
            //$conn = mysqli_connect($username, $root, $pass, $dbname);
            $sql = "DELETE FROM tbl_payment WHERE tbl_payment.booking_id = $cus_id[0]";
            $res = mysqli_query($conn,$sql);
            if($res)
            {
            //    echo 'Deleted from payment<br>';
            }


            $sql = "DELETE FROM tbl_booking WHERE tbl_booking.customer_id = $cus_id[0]";
            $res = mysqli_query($conn,$sql);
            if($res)
            {
            //    echo "Deleted from booking!<br>";
            }
            $sql = "DELETE FROM `tbl_customer` WHERE `tbl_customer`.`CNIC` = '$Cnic' ";
            $res = mysqli_query($conn,$sql);
            if($res)
            {
            //    echo "Deleted from customer!<br>";
            }
            $sql = "UPDATE tbl_cars SET tbl_cars.status = 0 WHERE tbl_cars.car_id = '$CarPin' ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
            //    echo "Status changed to 0<br>";
            }
        }
        echo "<script>
        location.href='dashboard.php';
        </script>";
    }
    
?>