<?php

$DBHost = "localhost";
$DBUser = "root";
$DBPassword = "";
$DBName = "happyhomecleaners_db";

$conn = mysqli_connect("localhost", "root", $DBPassword, $DBName, 3307);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>