<?php
    if(!isset($_SESSION["username"]))// && $_SESSION['pin']==1)
    {
        header('location: login.php');
    }
    else
    {
        //$_SESSION['pin']=0;
        header('location: dashboard.php');
    }
?>