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