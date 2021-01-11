<!DOCTYPE html>
<html>
<head>

    <title>eHealth Monitoring System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
</head>
<body>


<h1>Sensors Data Connected to Blockchain</h1>
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



}




// close cURL resource, and free up system resources
curl_close($ch);





$heartrate = $GLOBALS['heartrate'];
$respiration = $GLOBALS['respiration'];
$spo2 = $GLOBALS['spo2'];
$temperature = $GLOBALS['temperature'];



echo $heartrate;
echo $respiration;
echo $spo2;
echo $temperature;

$ar=array("Heartrate"=>"$heartrate","Respiration"=>"$respiration","SPO2"=>"$spo2","Temperature"=>"$temperature");
echo http_build_query($ar);

?>

<br><br>
<table>
    <thead>
    <tbody>
    <h1>Arranged in order </h1>

    <td1><?php echo $ar['Heartrate'];?></td1><br>
    <td2><?php echo $ar['Respiration'];?></td2><br>
    <td3><?php echo $ar['SPO2'];?></td3><br>
    <td4><?php echo $ar['Temperature'];?></td4><br>

    </thead>
    </tbody>
        </table>

<script type='text/javascript'>
    // This will trigger your page to refresh 5s after it was loaded
    setTimeout(function(){ window.location.reload(true); },5000);
</script>



</body>
</html>

    
