<?php

session_start();

// isset prüft, ob eine Variable oder ein Array-Key vorhanden ist
if(isset($_POST['user'])) {
    $_SESSION['user'] = $_POST['user']; // Überträgt den Namen des Users aus dem POST in die Session
}

if(isset($_SESSION['user'])) {
    echo 'Hallo '.$_SESSION['user'];
}
else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <form action="session2.php" method="post">
            <label for="user">Name: </label>
            <input type="text" name="user" id="user">
            <button>Senden</button>
        </form>

    </body>
    </html>


    <?php
}