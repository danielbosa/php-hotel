<?php

    $hotels = [ 
        [   
            'id'=> '1',
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4,
            'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/1a/ea/54/hotel-presidente-4s.jpg?w=1200&h=-1&s=1'
        ],
        [ 
            'id'=> '2',
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2,
            'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/ed/95/07/limak-eurasia-luxury.jpg?w=700&h=-1&s=1'
        ],
        [ 
            'id'=> '3',
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
            'image' => 'https://cdn.britannica.com/96/115096-050-5AFDAF5D/Bellagio-Hotel-Casino-Las-Vegas.jpg'
        ],
        [ 
            'id'=> '4',
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5,
            'image' => ''
        ],
        [ 
            'id'=> '5',
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
            'image' => ''
        ],

    ];

//per ottenere array di hotel frutto di filtri selezionati
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

};

//per ottenere i dettagli del singolo hotel di mio interesse
function getHotelById($hotels){
  $hotelFocusedARR = array_filter($hotels, function($item){
    return $item['id'] == $_GET['id'];
  });
  $hotelFocusedSINGLE = array_shift($hotelFocusedARR); 
  return $hotelFocusedSINGLE;
};

?>