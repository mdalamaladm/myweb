<?php
include_once 'db_connect.php';

$name = $_POST["name"];
$comment = $_POST["comment"];

$sqlInput = "INSERT INTO comment(name, comment) VALUES ('$name', '$comment');";

mysqli_query($conn, $sqlInput);

echo $name;
header("Location: content.php?login=success");

?>