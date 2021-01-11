 <!DOCTYPE html>
<html>

<body>
 <h1>Sensors Data Connect to MYSQL</h1>
<?php

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://healthypi.local/readtemperature");
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// grab URL and pass it to the browser

$response = curl_exec($ch);


// $response will be false if the curl call failed
if($response) {
   // var_dump(json_decode($response, true));
  $data =  explode(",", var_export($response, true));


    $GLOBALS['heartrate'] = ltrim($data[0], " '");
    $GLOBALS['respiration'] = $data[1];

    $GLOBALS['spo2'] = $data[2];
    $GLOBALS['temperature'] = rtrim($data[3]/100, "' ");

echo("file.txt", $data)


}
?>

</body>
</html>
