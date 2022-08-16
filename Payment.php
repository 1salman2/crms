<?php
    $username = 'localhost';
    $root = 'root';
    $dbname = 'crms';
    $pass = '';
    $fname = $_POST['fname'];
    $No_of_days = $_POST['Ndays'];
    $Cnic = $_POST['cnic'];
    $Address = $_POST['address'];
    $Telephone = $_POST['phone'];
    $City = $_POST['city'];
    $CarPin = $_POST['pin'];
    $gender = $_POST['gender'];

    $SUB = $_POST['submit'];

    if(isset($SUB))
    {
        //validating the submitted info
        $connect = mysqli_connect($username, $root, $pass, $dbname);
        $sql = "SELECT C.CNIC FROM tbl_customer AS C where C.CNIC='$Cnic'";
        $result = mysqli_query($connect,$sql);
        $num = mysqli_num_rows($result);
        if($num === 1)
        {
            echo "<script>
            alert('You have already rented a Car');
            location.href='Booking.php';
            </script>";
        }
        else
        {
            $connect1 = mysqli_connect($username, $root, $pass, $dbname);
            $sql = "SELECT C.car_id FROM tbl_cars AS C WHERE C.car_id = '$CarPin' ";
            $result1 = mysqli_query($connect1,$sql);
            $id = mysqli_num_rows($result1);
            if($id != '1')
            {
                echo "<script>
                alert('Invaild Car Pin');
                location.href='Booking.php';
                </script>";
            }
            else
            {
                $connect2 = mysqli_connect($username, $root, $pass, $dbname);
                $sql = "SELECT s.status FROM tbl_cars AS s WHERE s.car_id = '$CarPin'";
                $result2 = mysqli_query($connect2,$sql);
                $status = mysqli_fetch_assoc($result2);
                if($status["status"] == '1')
                {
                    echo "<script> 
                    alert('This Car Is Not Available');
                    location.href='Booking.php';d
                    </script>";               
                }
                else
                {
                    $connect3 = mysqli_connect($username, $root, $pass, $dbname);
                    $sql = "INSERT INTO `crms`.`tbl_customer` (`customer_id`, `firstname`, `address`, `contact`, `CNIC`, `Gender`, `city`, `Car_pin`) 
                    VALUES (NULL, '$fname', '$Address', '$Telephone', '$Cnic','$gender', '$City', '$CarPin');";
                    $result3 = mysqli_query($connect3,$sql);
                    // if($res)
                    // {
                    //     echo "inserted in customer<br>";
                    // }
                    $connect4 = mysqli_connect($username, $root, $pass, $dbname);
                    $sql = "SELECT * FROM `tbl_customer` ";
                    $result4 = mysqli_query($connect4,$sql);
                    $id = mysqli_num_rows($result4);
                    // if($result)
                    // {
                    //     echo $id;
                    //     echo " returning rows from customer<br>";
                    // }
                    
                    $connect5 = mysqli_connect($username, $root, $pass, $dbname);
                    $sql = "INSERT INTO `crms`.`tbl_booking` (`booking_id`, `car_id`, `customer_id`, `date_time`, `No_of_days`) 
                    VALUES (NULL,'$CarPin', '$id', current_timestamp(), '$No_of_days');";
                    $result5 = mysqli_query($connect5,$sql);
                    // if($result)
                    // {
                    //     echo "inserted in booking<br>"; 
                    // }
                    $connect6 = mysqli_connect($username, $root, $pass, $dbname);
                    $sql = "UPDATE tbl_cars SET tbl_cars.status = '1' WHERE tbl_cars.car_id = '$CarPin' ";
                    $result6 = mysqli_query($connect6,$sql);
                    // if($result)
                    // {
                    //     echo "Status changed to 1<br>";
                    // }
                    echo "You can proceed...<br>";//<br>Gernerating your Invoice...";
                    $sql = "SELECT c.Rent FROM tbl_cars AS c WHERE c.car_id = '$CarPin'";
                    $result7 = mysqli_query($connect6,$sql);
                    $rent = mysqli_fetch_array($result7);
                    // if($res)
                    // {
                    //     echo "Got rent of car<br>";
                    // }
                    $connect8 = mysqli_connect($username, $root, $pass, $dbname);
                    $sql = "SELECT b.booking_id FROM `tbl_booking` AS b ";
                    $result8 = mysqli_query($connect8,$sql);
                    $booking_id = mysqli_num_rows($result8);
                    // if($result)
                    // {
                    //     echo $booking_id;
                    //     echo " returning rows from booking <br> got booking id";
                    // }            
                    $connect9 = mysqli_connect($username, $root, $pass, $dbname);
                    $sql = "INSERT INTO `crms`.`tbl_payment` (`payment_id`, `booking_id`, `payment_amount`, `add_charges`, `date_time`) 
                    VALUES (NULL,'$booking_id', '$rent[0]', 0 , current_timestamp() );";
                    $result9 = mysqli_query($connect9,$sql);

                    
                    session_start();
                    //echo 'Session is started';
                    $_SESSION['Fname']=$fname;
                    $_SESSION['Cnic']=$Cnic;
                    $_SESSION['Address']=$Address;
                    $_SESSION['contact']=$Telephone;
                    $_SESSION['Days']=$No_of_days;
                    $_SESSION['car_id']=$CarPin;
                    $_SESSION['rent']=$rent[0];
                
                    //echo '<br>Information is stored successfully';
                    echo "<script>
                    alert('Booked sucessfully');
                    location.href='invoice.php';
                    </script>";                                        
                }    
            }     
        } 
    }
?>
