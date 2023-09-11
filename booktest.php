<?php

require_once 'Book.php';

$book = new Book('Backen ohne Mehl', 'Carel Danvers', '01234-56789-101112'); // Ruft automatisch __construct auf
$book->setEbook(true);
$book->setPrice(19.99);

//print_r($book);

echo $book; // echo oder print auf Objekten verwendet automatisch __toString()

echo $book->summary();