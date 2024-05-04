<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

function getHotels($hotels){

  $cloneHotels = $hotels;

  if(isset($_GET['star']) && isset($_GET['parking'])){
    $cloneHotels = array_filter($hotels, function($hotel){
      return ($hotel['vote'] >= $_GET['star'] && $hotel['parking'] === true);
    });
  } elseif (isset($_GET['parking'])){
    $cloneHotels = array_filter($hotels, function($hotel){
    return $hotel['parking'] === true;
    });
  } elseif (isset($_GET['star'])){
    $cloneHotels = array_filter($hotels, function($hotel){
    return $hotel['vote'] >= $_GET['star'];
    });
  };

  return $cloneHotels;

}

?>