<?php

include 'includes/autoload.php';

$pkw1 = new Pkw('HH:AB123', 'Ford', 'Mustang', new ElektroMotor());

print_r($pkw1);

$pkw1->fahreVerwaerts();
