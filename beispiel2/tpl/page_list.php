<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, th, td {
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>

</head>
<body>


    <p><a href="admin.php?a=new">Neue Seite anlegen</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Label</th>
                <th>Action</th>
                <th>Online</th>
                <th>Reihenfolge</th>
                <th>Vorlage</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($pages as $page) { ?>
            <tr>
                <td><?= $page->getId() ?></td>
                <td><?= $page->getLabel() ?></td>
                <td><?= $page->getAction() ?></td>
                <td><?= $page->getOnline() ?></td>
                <td><?= $page->getNavorder() ?></td>
                <td><?= $page->getTemplate() ?></td>
                <td>
                    <a href="admin.php?a=edit&id=<?= $page->getId() ?>">EDIT</a>
                    <a href="admin.php?a=delete&id=<?= $page->getId() ?>">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>