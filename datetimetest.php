<?php

const DATE_FMT = 'd. F Y';
const TIME_FMT = 'H:i';

$d1 = new DateTime('now');
$d2 = new DateTime('2000-01-15');
$d3 = new DateTime('+2 days');
// d - Tag
// m - Monat
// Y - Jahr
// H - Stunden
// i - Minuten
// s - Sekunden
echo $d1->format(DATE_FMT)." ";
echo $d1->format(TIME_FMT)."\n";
echo $d2->format(DATE_FMT)."\n";
echo $d3->format(DATE_FMT)."\n";
$d3->modify('+1 day');
$d3->modify('-10 months');
echo $d3->format(DATE_FMT)."\n";

$zone = new DateTimeZone('Europe/Berlin');
$d1->setTimezone($zone);
print_r($d1);

$d1 = new DateTime('now');
$d2 = new DateTime('2050-01-01');
$abstand = $d2->diff($d1);
print_r($abstand);
echo $abstand->format('%a')."\n";

$d1 = new DateTime('now');
$abstand = new DateInterval('P10Y5M');
echo $d1->format(DATE_FMT)."\n";
$d1->sub($abstand); // Das Interval wird vom Datum abgezogen
echo $d1->format(DATE_FMT)."\n";
$d1->add($abstand); // Das Interval wird zum Datum dazugezählt
echo $d1->format(DATE_FMT)."\n";

