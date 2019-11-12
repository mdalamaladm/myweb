<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "m4RK4z_rasyad";
$dbName = "login_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sqlUnumber = mysqli_query($conn, "SELECT unumber FROM uname WHERE passw = '$passw' AND uname = '$uname';");


?>