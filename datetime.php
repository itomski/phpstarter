<?php

echo date_default_timezone_set('Europe/Berlin');

const DATE_FMT = 'd. M Y H:i';

echo strtotime('07.09.2023 9:20')."\n";
echo time()."\n";
$now = time();


echo date(DATE_FMT, $now);


$start = strtotime('07.09.2023');
$ende = strtotime('07.10.2023');

echo (($ende - $start) / 60 / 60 / 24);