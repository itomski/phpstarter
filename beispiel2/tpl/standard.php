<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <?php foreach($pages as $page) { ?>
                <li>
                    <a href="index.php?a=<?= $page->getLabel() ?>"><?= $page->getLabel() ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    
</body>
</html>