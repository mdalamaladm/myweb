<?php

$sqlOutput = "SELECT * FROM comment;";
$resultOutput = mysqli_query($conn, $sqlOutput);
$resultCheck = mysqli_num_rows($resultOutput);

if ($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($resultOutput)){

        echo 'Your name is: ' . $row['name'];
        echo '<br>';
        echo $row['name'] . "'s opinion is " . '<br>';
        echo $row['comment'];
        echo '<br>';
        echo '<br>';
        echo '<hr>';
        echo '<br>';
    }
}



?>