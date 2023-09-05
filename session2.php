<?php

session_start();

// isset prüft, ob eine Variable oder ein Array-Key vorhanden ist
if(isset($_POST['vorname'])) {
    // Speichert ein Assoziatives Array in der Session
    $_SESSION['user'] = ['vorname' => $_POST['vorname'], 'nachname' => $_POST['nachname']]; // Überträgt den Namen des Users aus dem POST in die Session
}

if(isset($_GET['logout'])) {
    session_destroy(); // Zerstört die Session
    //unset($_SESSION['user']); // Entfernt das Array am Key user
    header('location: session2.php'); // Lädt das Dokument neu - Umleitung
}

if(isset($_SESSION['user'])) {
    print_r($_SESSION);
    echo 'Hallo '.$_SESSION['user'];
    echo 'Hallo '.$_SESSION['user']['vorname'].' '.$_SESSION['user']['nachname'];
    echo '<p><a href="session2.php?logout=1">Session-Kill</a></p>';
}
else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="bootstrap-5.3.1/css/bootstrap.min.css">
    </head>
    <body>

        <main class="container">

            <div class="row">
                <div class="col-md-6">

                    <h1>Deine Daten</h1>

                    <form action="session2.php" method="post">

                        <div class="mb-3">
                            <label for="vorname" class="form-label">Vorname:</label>
                            <input type="text" name="vorname" id="vorname" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="nachname" class="form-label">Nachname:</label>
                            <input type="text" name="nachname" id="nachname" class="form-control">
                        </div>

                        <button class="btn btn-secondary">Senden</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="bootstrap-5.3.1/js/bootstrap.min.js"></script>

    </body>
    </html>


    <?php
}