<?php

require_once 'includes/autoload.php';

$book = new Book();

$book->setTitle('Kochen ohne Fett')
    ->setIsbn('1234-5678-91011')
    ->setPrice(19.99);

echo $book->getOfferPrice();

print_r($book->getArrayData());

