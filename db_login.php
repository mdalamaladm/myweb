<?php

session_start();

include_once 'db_connect_login.php';

if($_GET["signup"] === 'success'){
  echo '<script>';
  echo "alert('Sign Up Success!');";
  echo '</script>';
}

$uname = $_POST["uname"];
$passw = $_POST["passw"];

 
$sqlUname = mysqli_query($conn, "SELECT uname FROM uname WHERE uname = '$uname' AND passw = '$passw';");
$sqlPassw = mysqli_query($conn, "SELECT passw FROM uname WHERE passw = '$passw' AND uname = '$uname';");
$sqlUnumber = mysqli_query($conn, "SELECT unumber FROM uname WHERE passw = '$passw' AND uname = '$uname';");

$sqlUname = mysqli_fetch_assoc($sqlUname);
$sqlPassw = mysqli_fetch_assoc($sqlPassw);
$sqlUnumber = mysqli_fetch_assoc($sqlUnumber);

$_SESSION['uname'] = $sqlUname['uname'];
$_SESSION['passw'] = $sqlPassw['passw'];
$_SESSION['unumber'] = $sqlUnumber['unumber'];

// echo $sqlUnumber['unumber'];


if ($uname === $_SESSION['uname'] && $passw === $_SESSION['passw']){

  header("Location: index.php?id=" . $_SESSION['unumber']);
} else {
  header("Location: login.php?login=fail");

} 





?>