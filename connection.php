<?php

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpassword = "";
$dbname = "stfms";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$conn) {
    echo "Connection Failed!";
}
