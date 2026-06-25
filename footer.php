<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPwd = "root";
$dbName = "first_db";

$conn = mysqli_connect($serverName, $dbUsername, $dbPwd, $dbName);

if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}