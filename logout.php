<?php
    session_start();


    session_unset();
    session_destroy();
    echo "<script>
        alert('Successfully Logged out');
        location.href='index.php';
        </script>";
?>