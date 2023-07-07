<?php 

if(!empty($_GET) && $_GET['action'] === 'getData') {
    getDataFromCsv();
} elseif (!empty($_POST) &&  !empty($_GET) && ($_GET['action'] === 'addData')) {
    addDataToCsv($_POST);
} else {
    print_r('scam');
}



function getDataFromCsv(){
    $file = fopen ('data.csv', 'r');
    $data = [];
    while ($item = fgetcsv($file, 1000,';')){
        $newElement = [
            'name_car' => $item[0],
            'name_car22' => $item[1],
            'name_car33' => $item[2],
        ];
      array_push($data, $newElement);
    }
    echo(json_encode($data));
    print_r("\n compl!");
}



function addDataToCsv ($dataAdd){
    $file = fopen ('data.csv', 'a+');
    $dataAdd = implode (';', $_POST);
    fwrite($file, "\n".$dataAdd);
    print_r('++');
}