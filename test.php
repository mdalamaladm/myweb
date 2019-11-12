<?php
    include_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .div {
        position: absolute;
        top: 100px;
        left: 0px;
        width: 100px;
        height: 100px;
        background-color: red;
        
    }

    .div.dong {
        animation: mymove 2s linear 2s 1 forwards;
    }

    @keyframes mymove {
        0% {left: 0px;}
        100% {left: 200px; top:200px;}
    }
    </style>
</head>
<body>

<div class="div" id="div"></div>
<script>
var div = document.getElementById('div');

div.addEventListener('click', function(){
    if(div.className === 'div'){
        div.className += ' dong';
    } else {
        div.className = 'div';
        div.style.animation = 'mymove 2s linear 2s 1 reverse'
    }
})
</script>
    
</body>
</html>