<?php

$arr = ['Peter', 'Carol', 'Bruce'];
//$v1 = $arr[0];
//$v2 = $arr[1];
//$v3 = $arr[3];

//list($v1, $v2, $v3) = $arr;
[$v1, $v2, $v3, $v4] = $arr;

echo $v1."\n";
echo $v2."\n";
echo $v3."\n";
echo $v4."\n";

$posts = [
    ['date' => time(), 'author' => 'Peter Parker', 'content' => 'Bla bla bla1'],
    ['date' => time(), 'author' => 'Tony Stark', 'content' => 'Bla bla bla2'],
    ['date' => time(), 'author' => 'Carol Danvers', 'content' => 'Bla bla bla3'],
    ['date' => time(), 'author' => 'Natasha Romanov', 'content' => 'Bla bla bla4'],
];

echo $posts[0]['author']."\n";

foreach($posts as $post) {
    echo $post['author'].', '.$post['content']."\n";
}

echo "\n\n";

foreach($posts as ['author' => $author, 'content' => $content]) {
    echo $author.', '.$content."\n";
}

// Sourcecode in Externe Dateien lässt sich einfacher wiederverwenden
require_once 'includes/config.php';
require_once 'includes/functions.php';

foreach(getAllUsers($dbh) as ['firstname' => $fn, 'lastname' => $ln]) {
    echo $fn.', '.$ln."\n";
}