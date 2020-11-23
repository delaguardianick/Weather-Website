<?php
$apiKey = "1433deb5fada830d0ffb2d9f6862d0aa";
if(isset($_GET['city'])){
    $cityName = $_GET['city'];
}else{
    $cityName = 'toronto';
}

if(isset($_GET['time'])){
    $dt = $_GET['time'];
}

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
    return $data;
}

$data = callData($googleApiUrl);
//Get longitude and Latitude
$lonValue = $data->coord->lon;
$latValue = $data->coord->lat; 

$urls = array('oneCall' => 'https://api.openweathermap.org/data/2.5/onecall?lat='. $latValue .'&lon=' . $lonValue . '&appid=1433deb5fada830d0ffb2d9f6862d0aa&units=metric',
            'current' => "http://api.openweathermap.org/data/2.5/weather?q=" . $cityName . "&lang=en&units=metric&APPID=" . $apiKey,
            'historical' => "https://api.openweathermap.org/data/2.5/onecall/timemachine?lat=". $latValue . "&lon=" . $lonValue . "&dt=" . $dt . "&appid=" . $apiKey . "&units=metric",
            'fiveDay' => "https://api.openweathermap.org/data/2.5/forecast?q=" . $cityName . "&appid=" . $apiKey
);

if(isset($_GET['type'])){
    $u = callData($urls[$_GET['type']]);
    echo json_encode($u);
}else{
    echo "FAIL"; 
}
?>

