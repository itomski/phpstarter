<?php

// MVC - Model, View, Controller

// Datenbasis - Model
$pages = [];
$pages['home'] = ['title' => 'Startseite', 
                    'headline' => 'Herzlich Willkommen',
                    'content' => 'Bla bla bla bla bla'];

$pages['products'] = ['title' => 'Produkte', 
                    'headline' => 'Das sind unsere Produkte',
                    'content' => 'Bla bla...'];

$pages['contact'] = ['title' => 'Kontakt', 
                    'headline' => 'So erreichen Sie uns',
                    'content' => 'Schreiben Sie uns einfach eine E-Mail...'];

// Controller                    
$action = $_GET['a']; // Unsave
switch($action) {
    case 'products':
        $page = $pages['products'];
        break;

    case 'contact':
        $page = $pages['contact'];
        break;

    default:
        $page = $pages['home'];
}

// View
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page['title'] ?></title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="pagetest.php">Startseite</a></li>
            <li><a href="pagetest.php?a=products">Produkte</a></li>
            <li><a href="pagetest.php?a=contact">Kontakt</a></li>
        </ul>
    </nav>

    <hr>

    <main>
        <h1><?= $page['headline'] ?></h1>
        <?= $page['content'] ?>
    </main>
    
</body>
</html>