<?php

// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60


$matches = [
  
    [
        'host' => 'Collegno',
        'scoreHost' => '50',
        'guest' => 'Rivoli',
        'scoreGuest'=> '30',
    ],
    [
        'host' => 'Rivalta',
        'scoreHost' => '20',
        'guest' => 'Avigliana',
        'scoreGuest'=> '60',
    ],
    [
        'host' => 'Casellette',
        'scoreHost' => '80',
        'guest' => 'Avigliana',
        'scoreGuest'=> '40',
    ],


];

for($i = 0; $i < count($matches); $i++){
    echo $matches[$i]['host'] . '-' .  $matches[$i]['guest'] . '//' . $matches[$i]['scoreHost'] . '-' . $matches[$i]['scoreGuest'] . '<br>';
}