<?php
// $dbhost = 'phpmyadmin.ecs.westminster.ac.uk';
// $dbuser = 'w1830241';
// $dbpass = 'Jhw8xqB4mxDV';
// $dbname = 'w1830241_0';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'homteqdb';

//create a DB connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

//if the DB connection fails, display an error message and exit 
if (!$conn)
{
    die('Could not connect: ' . mysqli_error($conn));
}

//select the database
mysqli_select_db($conn, $dbname);
?>