<?php
    function createData(){
        
        $file = fopen ('data.csv','w');
        $data = array(
                '0' => array(
                    'flight_number' => 'U6 173',
                    'destination' => 'Хабаровск',
                    'departure_time' => '00:05',
                    'departure date' => '07.10.2022',
                    'ticket price' => '16287',
                    'number_of_seats' => '160'
                    ),
                '1' => array(
                    'flight_number' => 'UT‑381',
                    'destination' => 'Санкт-Петербург',
                    'departure_time' => '18:30',
                    'departure date' => '16.11.2022',
                    'ticket price' => '3395',
                    'number_of_seats' => '162'
                    ),
                '2' => array(
                    'flight_number' => 'TK‑7699',
                    'destination' => 'Париж',
                    'departure_time' => '04:05',
                    'departure date' => '22.10.2022',
                    'ticket price' => '26490',
                    'number_of_seats' => '162'    
                    ),
                '3' => array(
                    'flight_number' => 'S7‑2509',
                    'destination' => 'Новосибирск',
                    'departure_time' => '17:05',
                    'departure date' => '31.12.2022',
                    'ticket price' => '6299',
                    'number_of_seats' => '148'                          
                    ),
                '4' => array(
                    'flight_number' => 'DP‑6921',
                    'destination' => 'Махачкала',
                    'departure_time' => '18:20',
                    'departure date' => '14.11.2022',
                    'ticket price' => '2590',
                    'number_of_seats' => '164'
                    )
    
        );
        
        foreach($data as $i=>$value){
            $implodedData = implode($data[$i], ';');
            fwrite($file, $implodedData . "\n");
        }
        
        fclose($file);
    }
    createData();