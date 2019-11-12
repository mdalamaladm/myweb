<?php
include_once 'db_connect_login.php';

$uname = $_POST["uname"];
$passw = $_POST["passw"];
$email = $_POST["email"];
$unumber = mt_rand();

$sqlInput = "INSERT INTO uname VALUES ('$uname', '$passw', '$email', '$unumber');";

mysqli_query($conn, $sqlInput);

header("Location: login.php?signup=success");


?>