<?php

$host_name='localhost';
$name='root';
$pass='';
$db='server';

$con=mysqli_connect($host_name,$name,$pass) or di('Database error');
mysqli_select_db($con,$db)or die(mysqli_error($con));


 ?>
