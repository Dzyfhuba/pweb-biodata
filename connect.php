<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname1 = "pweb_biodata";
$dbname2 = "pweb_biodata_photo";

$conn1 = mysqli_connect($servername, $username, $password, $dbname1);
$conn2 = mysqli_connect($servername, $username, $password, $dbname2);
if (!($conn1 && $conn2)) {
    die("Connection failed: " . mysqli_connect_error());
}