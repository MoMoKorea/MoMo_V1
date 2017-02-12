<?php

function getSalt() {
    return 'zktpfwhzos%&4';
}

function getPasswordWithSalt($password) {
    return (getSalt() . $password);
}

function getGoogleApiKey() {
    return 'AIzaSyBX1ZrnsKUBzZW2WkQdLT6A5dTZbHC_MQU';
}


function getRatingData($rates) {

    if ($rates
    && count($rates) > 0) {



    }

    return [
      'countRate' => 0,
      'avgRate' => 0.0
    ];

}