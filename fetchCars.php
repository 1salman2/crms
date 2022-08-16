<?php
$connect=mysqli_connect('localhost','root',"",'crms');
$query="SELECT * FROM tbl_cars WHERE status = '0'";
$result=mysqli_query($connect,$query);
$cars = $result->fetch_all(MYSQLI_ASSOC);
