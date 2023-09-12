<?php

include 'includes/autoload.php';

$student1 = new Student(['vorname' => 'Peter', 'nachname' => 'Parker']);
$student2 = new Student(['vorname' => 'Bruce', 'fach' => 'Jura']);
$student3 = new Student(['vorname' => 'Carol', 'fach' => 'WiInf', 'semester' => 3, 'augenfarbe' => 'Blau']);

//print_r($student1);
//print_r($student2);
//print_r($student3);

$json = file_get_contents('students.json');
$arr = json_decode($json, true);

$students = [];

foreach($arr as $data) {
    print_r($data);
    $students[] = new Student($data);
}

print_r($students);