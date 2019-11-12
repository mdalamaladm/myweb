<?php
    include_once 'db_connect.php';
    include 'must_login.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Judul Konten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include 'must_login.php' ?>
<body>
    <header>
        <?php include 'navigation.php' ?>
    </header>
    <main id="main">  
            <h1>Judul Konten</h1>
        <hr>
        <article>
            <section class="vid-cont">
                <video src="tes.mp4"
                    controls
                    width="500">
                </video>
                <h2>Judul</h2>
            </section>
            <section class="content" id="cont">
                    

                [Konten][Konten][Konten][Konten][Konten][Konten]
                [Konten][Konten][Konten][Konten][Konten][Konten]
                [Konten][Konten][Konten][Konten][Konten][Konten]
                [Konten][Konten][Konten][Konten][Konten][Konten]
                [Konten][Konten][Konten][Konten][Konten][Konten]
                [Konten][Konten][Konten][Konten][Konten][Konten]
                [Konten][Konten][Konten][Konten][Konten][Konten]
                
            </section>
        </article>
        <h2>Comment</h2>
        <br>
        <?php include 'db_output.php' ?>

        <form id="form" action="db_input.php" method="POST">
            <input id="name" placeholder="Insert Your Name" type="text" name="name" />
            <br>
            <br>
            <textarea id="comment" placeholder="Enter Your Comment" name="comment" rows="10" cols="50"></textarea>
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
        <script type="text/javascript" src="comment.js"></script>
    </main> 
    <?php include 'footer.php' ?>
</body>
</html>