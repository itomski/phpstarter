<?php

session_start();

//$_SESSION['counter'] = 1; // Legt auf dem Server für die Sitzung Daten ab
echo 'Start! '.(++$_SESSION['counter']);

