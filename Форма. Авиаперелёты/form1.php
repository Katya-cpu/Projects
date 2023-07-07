<?php

$items = [];
$key = $_POST['key'];

unset($_POST['key']);
$file = fopen('data.csv', 'r');
while ($item = fgetcsv($file, 1000, ';')) {
    $items[] = $item;
}
unset($items[$key]);
$items[$key] = $_POST;
ksort($items);
$file = fopen('data.csv', 'w');
foreach ($items as $value) {
    fwrite($file, implode(';', $value)."\n"); 
}

if (file_exists('./list.php')) {
    header('Location: ./list.php');
}