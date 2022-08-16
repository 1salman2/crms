<?php
    $car_id = $_POST['car_id'];
    $car_name = $_POST['car_name'];
    $model = $_POST["car_model_year"];
    $brand = $_POST["car_brand"];
    $plate = $_POST["plate_number"];
    $rent = $_POST["rent"];

    $connection1=mysqli_connect('localhost','root',"",'crms');
    $query1="SELECT al.car_id FROM tbl_cars AS al WHERE al.car_id = $car_id ";
    $result1=mysqli_query($connection1,$query1);
    $row=mysqli_num_rows($result1);
    if($row == 1)
    {
        echo "<script>
            alert('The car pin is already exist');
        </script>";
        echo "<script>
            location.href='addcar.php';
        </script>";
    }
    else
    {
        $connect=mysqli_connect('localhost','root',"",'crms');
        $query="INSERT INTO `crms`.`tbl_cars` (`car_id`,`car_name`,`car_model_year`, `car_brand`,`plate_number`,`status`, `Rent`) 
        VALUES ('$car_id','$car_name','$model','$brand', '$plate',0,'$rent')";
        $result=mysqli_query($connect,$query);
        if($result)
        {
            echo 'Inserted in tbl_cars <br>';
        }
        echo "<script>
                alert('Added Successfully!!');
            </script>";
        //header('location: admindashboard.php');
    }


?>