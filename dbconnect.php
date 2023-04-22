<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courier";

// Create connection
$dbcon = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}





?>