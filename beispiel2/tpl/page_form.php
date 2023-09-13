<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="admin.php?a=save" method="post">

        <input type="hidden" name="id" id="id">

        <div>
            <input type="text" name="label" id="label" placeholder="Label">
        </div>
        <div>
            <input type="text" name="action" id="action" placeholder="Action">
        </div>
        <div>
            <input type="text" name="headline" id="headline" placeholder="Headline">
        </div>
        <div>
            <textarea name="content" id="content" placeholder="Inhalt" rows="10"></textarea>
        </div>
        <div>
            <select name="online" id="online">
                <option value="0">nicht online</option>
                <option value="1">online</option>
            </select>
        </div>
        <div>
            <input type="number" name="navorder" id="navorder" placeholder="Reihenfolge">
        </div>

        <button>Speichern</button>
    </form>
</body>
</html>