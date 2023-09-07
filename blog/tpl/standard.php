<!-- VIEW -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?: 'Unbekannt' ?></title>
</head>
<body>
    <main>
        <h1><?= $headline ?: 'Unbekannt' ?></h1>

        <div>
            <?= $content ?: 'Leer' ?>
        </div>
    </main>
</body>
</html>