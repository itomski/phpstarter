<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><a href="admin.php">Zurück</a></p>

    <form action="admin.php?a=save" method="post">

        <input type="hidden" name="id" id="id" value="<?= $page->getId() ?>">

        <div>
            <input type="text" name="label" id="label" placeholder="Label" value="<?= $page->getLabel() ?>">
        </div>
        <div>
            <input type="text" name="action" id="action" placeholder="Action" value="<?= $page->getAction() ?>">
        </div>
        <div>
            <input type="text" name="headline" id="headline" placeholder="Headline" value="<?= $page->getHeadline() ?>">
        </div>
        <div>
            <textarea name="content" id="content" placeholder="Inhalt" rows="10"><?= $page->getContent() ?></textarea>
        </div>
        <div>
            <select name="online" id="online">
                <option value="0" <?= $page->getOnline() == 0 ? 'selected' : '' ?>>nicht online</option>
                <option value="1" <?= $page->getOnline() == 1 ? 'selected' : '' ?>>online</option>
            </select>
        </div>
        <div>
            <input type="number" name="navorder" id="navorder" placeholder="Reihenfolge" value="<?= $page->getNavorder() ?>">
        </div>

        <div>
            <select name="template" id="template">
                <option value="2col" <?= $page->getTemplate() == '2col' ? 'selected' : '' ?>>2 Spalten</option>
                <option value="1col" <?= $page->getTemplate() == '1col' ? 'selected' : '' ?>>1 Spalte</option>
                <option value="contact" <?= $page->getTemplate() == 'contact' ? 'selected' : '' ?>>Kontakt</option>
            </select>
        </div>

        <button>Speichern</button>
    </form>
</body>
</html>