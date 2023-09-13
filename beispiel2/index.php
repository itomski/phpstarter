<?php

require 'includes/conf.php';

$mapper = new PageMapper();
$pages = $mapper->findAll();

echo '<pre>';
print_r($pages);
echo '</pre>';

include 'tpl/standard.php';