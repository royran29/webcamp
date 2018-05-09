<?php
    //Convert products to json string.
    //& refence value or param.
    //With & arguments and params must have the same name
    function products_json(&$tickets, &$shirts = 0, &$stickers = 0){

        //El arreglo tickets tiene las llaves con numeros, lo q dificulta
        //el entendimiento, con lo siguiente cambiamos las llaves a palabras
        //faciles de entender.
        $days = array(0 => 'one_day', 1 => 'full_pass', 2 => 'pass_2days');
        $total_tickets = array_combine($days, $tickets);

        //Create json with array
        $json = array();
        foreach($total_tickets as $key => $ticket){
            if((int)$ticket > 0){
                $json[$key] = (int)$ticket;
            }
        }

        if((int)$shirts > 0) {
            $json['shirts'] = (int)$shirts;
        }

        if((int)$stickers > 0) {
            $json['stickers'] = (int)$stickers;
        }

        //return a formated json
        return json_encode($json);
    }

    function events_json(&$events){
        $events_json =  array();
        foreach($events as $event){
            $events_json['events'][] = $event;
        }

        return json_encode($events_json);
    }
?>