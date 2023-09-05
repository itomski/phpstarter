<?php

const FILE = 'data.txt';

$content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam et placeat, ullam assumenda veniam asperiores quam perferendis harum enim accusantium iure voluptates corporis temporibus expedita ratione recusandae, amet sed ea dolore, atque id commodi? Illo iste sapiente omnis iure autem. A natus nisi quaerat delectus eaque necessitatibus optio facilis itaque ipsam, incidunt aspernatur iusto deserunt blanditiis? Voluptate eius fuga labore voluptatem neque ratione dicta vel quod dolores officia tempore soluta magni ipsa reiciendis eaque autem, quos illum cupiditate quam optio voluptatum illo, quo aliquam. Hic, delectus? Incidunt maxime ipsa possimus ullam, delectus corporis ea exercitationem, autem quia accusantium culpa a.';
file_put_contents(FILE, $content);

$in = file_get_contents(FILE);
echo $in;

$arr = [200, 'x' => 15, 'y' => 22, 100];
print_r($arr);
//file_put_contents(FILE, $arr); // Array Struktur geht verloren
file_put_contents(FILE, serialize($arr));

$in = unserialize(file_get_contents(FILE));
//echo $in;
print_r($in);

$arr = [[10,15], 
        [22, 30],
        [11, 7]]; 

$json = json_encode($arr); // JSON enthält keine Schlüssel 

$arr = [['x' => 10, 'y' => 15], 
        ['x' => 22, 'y' => 30],
        ['x' => 11, 'y' => 7]];

$json = json_encode($arr); // Assoziative Struktur wir erhalten

file_put_contents(FILE, $json); // Speichert das JSON in die Datei

$json_str = file_get_contents(FILE); // Holt das JSON aus der Datei
$arr = json_decode($json_str, true); // true = Array, false = Object
print_r($arr);

?>

