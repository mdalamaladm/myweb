<?php
session_start();
?>

<nav>
    <div class="nav" id="navigation">
        <a href="index.php?id=<?php echo $_SESSION['unumber']; ?>">Home</a>
        <a href="pumum.php?id=<?php  echo $_SESSION['unumber']; ?>">Pengetahuan Umum</a>
        <a href="bahasa.php?id=<?php echo $_SESSION['unumber']; ?>">Bahasa</a>
        <a href="programming.php?id=<?php echo $_SESSION['unumber']; ?>">Programming</a>
    </div>
    <div id="burger">
        <div>
            <i id="burger-icon" class="fa fa-bars icon"></i>
        </div>
    </div>
    <script type="text/javascript" src="burger.js"></script>
</nav>