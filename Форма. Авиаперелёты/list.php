<?php
$array_file = file('data.csv');
$file = fopen('data.csv' , 'a+');
$items = [];

while ($item = fgetcsv($file, 1000, ';')) {
    $items[] = $item;
}

/* echo 'Честно украденные данные:'; */
echo '<table border=1>';
echo '<tr>';
echo '<td>' . 'Имя' . '</td>';
echo '<td>' . 'Тип счёта' . '</td>';
echo '<td>' . 'Номер счёта' . '</td>';
echo '<td>' . 'Баланс' . '</td>';
echo '<td>' . 'Дата последней операции' . '</td>';
echo '<td>' . 'Отправка' . '</td>';
echo '<td>' . 'Оценка' . '</td>';
echo '<td>' . 'Редактирование' . '</td>';
echo '<td>' . 'Удаление' . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '<td>' . '' . '</td>';
echo '</tr>'; 

foreach ($items as $key=>$item) {
    echo '<tr>';
    echo '<td>' . $item[0] . '</td>';
    echo '<td>' . $item[1] . '</td>'; 
    echo '<td>' . $item[2] . '</td>'; 
    echo '<td>' . $item[3] . '</td>';
    echo '<td>' . $item[4] . '</td>';
    echo '<td>' . $item[5] . '</td>';
    echo '<td>' . $item[6] . '</td>';
    echo '<td>' . '<button onclick="location.href=\'index.php?action=updateData&index=' . $key . '\';">Редактировать</button>' . '<td>' . '<button onclick="location.href=\'delete_action.php?index='. $key .'\';">Удалить</button>' . '</td>';
    echo '</tr>';
}
echo '<table>';
echo '<td><button onclick="location.href=\'main.html\';">Добавить украденные данные</button></td>';
echo $new_addition;