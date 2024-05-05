<?php
include __DIR__ . "/../Models/hotels.php";

function printTable($data){
    $template = "";
    foreach($data as $hotel){
    $template .= "<tr> <th><a href='pages/detail.php?id={$hotel['id']}'>{$hotel['name']}</a></th> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
    }
    return $template;
};

//recupero dati dal model
$cloneHotels = getHotels($hotels);

//creo template
$template = printTable($cloneHotels);
?>
