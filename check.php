<?php
    $name=$_POST['username'];
    $pass=$_POST['pass'];
    if(isset($_POST['submit1']))
    {
        session_start();
        $_SESSION["username"]=$name;
        $_SESSION["pass"]=$pass;
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
        if($row == 0)
        {
            echo "<script>
            alert('Invalid username');
            location.href='login.php';
                </script>";
        }
        else
        {
            $connection2=mysqli_connect('localhost','root',"",'crms');
            $query2="SELECT al.password FROM account_login AS al WHERE al.password ='$pass'";
            $result2=mysqli_query($connection2,$query2);
            $row=mysqli_num_rows($result2);
            if($row==0)
            {
                echo "<script>
                    alert('Invalid password');
                    location.href='login.php';
                </script>";
            }
            else
            {
                echo "<script>
                    alert('Successfully Login');
                    location.href='dashboard.php';
                </script>";
            }
        }    
    } 
    else
    {
        echo "Result not found";
    }
?>