<?php

$str1 = '<h1>Das ist ein Haus von "Nikigraus"</h>';

$str2 = "<h1>Das ist ein Haus von \nNikigraus</h> \t\t   ";

echo htmlspecialchars($str1)."\n";
echo htmlspecialchars($str2)."\n";
echo strip_tags($str1)."\n";

echo "<br>";

function clean(string $input) : string {
    // trim entfernt tabs und leerzeichen an beiden Enden
    // strip_tags entfernt HTML-Tags
    // htmlspecialchars wandelt sonderzeichen in HTML-Entities
    return htmlspecialchars(strip_tags(trim($input)));
}

echo clean($str2);

$input = "";
$cleanInput = "";

if(isset($_POST['input'])) {
    $input = $_POST['input'];
    $cleanInput = clean($_POST['input']);
}

// Alternative
//$input = filter_input(INPUT_POST, 'input');
//$cleanInput = clean($input);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" placeholder="Eingabe" name="input" id="input">
        <button>Go</button>
    </form>

    <hr>

    <?= $input ?>

    <hr>

    <?= $cleanInput ?>

</body>
</html>
