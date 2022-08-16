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
        $query1="SELECT al.uname FROM `admins` AS al WHERE al.uname='$name'";
        $result1=mysqli_query($connection1,$query1);
        if($result1)
        {
            $row=mysqli_num_rows($result1);
            echo $row;
            if($row==0)
            {
                echo "<script>
                alert('Invalid username');
                    </script>";
                echo "<script>
                    location.href='admin.php';
                </script>";
            }
            else
            {
                $connection2=mysqli_connect('localhost','root',"",'crms');
                $query2="SELECT al.pass FROM `admins` AS al WHERE al.pass ='$pass'";
                $result2=mysqli_query($connection2,$query2);
                if($result2)
                {
                    $row=mysqli_num_rows($result2);
                    echo $row;
                    if($row==0)
                    {
                        echo "<script>
                            alert('Invalid password');
                            location.href='admin.php';
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                            alert('Successfully Login');
                            location.href='admindashboard.php';
                        </script>";
                    }
                }    
            }
            //session_unset();
            //session_destroy();
        } 
        else
        {
            echo "Result not found";
        }  
    }

?>