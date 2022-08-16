<?php
    $name=$_POST['username'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];

    if(isset($_POST['submit1']))
    {
        session_start();
        $_SESSION["username"]=$name;;
        $_SESSION["pass"]=$pass;
        $_SESSION["email"]=$email;
        //$_SESSION["pin"]=0;

        $connection=mysqli_connect('localhost','root',"",'crms');
        if($connection)
        {
            echo 'Connection Created';
        }
        else
        {
            echo 'Connection  Not Created';
        }
        $connection1=mysqli_connect('localhost','root',"",'crms');
        $query1="SELECT al.user_name FROM account_login AS al WHERE al.user_name='$name'";
        $result1=mysqli_query($connection1,$query1);
        $row=mysqli_num_rows($result1);
        if($row == 1)
        {
            echo "<script>
                alert('This username is already exist');
            </script>";
            echo "<script>
                location.href='create_account.php';
            </script>";
        }
        else
        {
            $connection2=mysqli_connect('localhost','root',"",'crms');
            $query2="INSERT INTO `crms`.`account_login` (`user_id`,`user_name`,`password`, `email`) 
            VALUES (NULL,'$name','$pass','$email')";
            $result2=mysqli_query($connection2,$query2);
            if($result2)
            {
                echo 'Inserted in account_login<br>';
            }
            echo "<script>
                    alert('Signed up Successfully!!');
                </script>";
            header('location: login.php');
        }
        //session_unset();
        //session_destroy();
    }
?>