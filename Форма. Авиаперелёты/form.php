<?php

$file = fopen('data.csv', 'a+');
$items = [];

while ($item = fgetcsv($file, 1000, ';')) {
    $items[] = $item;
}

if (isset($_POST)) {
    $new_addition = fwrite($file,implode(';', $_POST). "\n");    
}

header('Location: ./list.php');