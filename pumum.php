<?php include 'must_login.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengetahuan Umum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <?php include 'navigation.php' ?>
    </header>  
    <main id="main">
        <h1>Ini Halaman Pengetahuan Umum</h1>
        <p>Mempelajari pengetahuan umum yang mungkin belum kamu ketahui!</p>
        <hr>
        <?php
        include 'content_list.php';
        ?>
    </main>
    <?php include 'footer.php'
        ?>
</body>
</html>