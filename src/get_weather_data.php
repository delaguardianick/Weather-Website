<?php
ini_set('session.cookie_domain','ryerson.ca') ;
session_start();
$apiKey = "1433deb5fada830d0ffb2d9f6862d0aa";
$cityName = $_POST["city"];
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $cityName . "&lang=en&units=metric&APPID=" . $apiKey;

function callData($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    //curl_close($ch);
    $data = json_decode($response);
    curl_close($ch);
}

$data = callData($googleApiUrl);
//Get longitude and Latitude
$lonValue = $data->coord->lon;
$latValue = $data->coord->lat; 
//Date setup
$date = time();
$db = 24*60*60;
$past = array('1'=> ($date-$db),
                '2' => ($date-($db*2)),
                '3' => ($date-($db*3)),
                '4' => ($date-($db*4)),
                '5' => ($date-($db*5))
);
$urls = array('oneCall' => 'https://api.openweathermap.org/data/2.5/onecall?lat='. $latValue .'&lon=' . $lonValue . '&appid=1433deb5fada830d0ffb2d9f6862d0aa&units=metric',
            'current' => "http://api.openweathermap.org/data/2.5/weather?q=" . $cityName . "&lang=en&units=metric&APPID=" . $apiKey,
            'historical' => "https://api.openweathermap.org/data/2.5/onecall/timemachine?lat=". $latValue . "&lon=" . $lonValue . "&dt=" . "%" . "&appid=" . $apiKey,
            'fiveDay' => "https://api.openweathermap.org/data/2.5/forecast?q=" . $cityName . "&appid=" . $apiKey
);

echo "hiihih";


?>

