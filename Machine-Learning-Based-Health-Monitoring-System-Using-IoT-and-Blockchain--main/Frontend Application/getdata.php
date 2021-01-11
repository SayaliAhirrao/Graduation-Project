<!DOCTYPE html>
<html>
<head>

    <title>eHealth Monitoring System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
</head>
<body>


 <h1>Sensors Data Connected to MYSQL</h1>
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



//$q = intval($_GET['http://healthypi.local/readtemperature']);

//step1
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}


//step2


$heartrate = $GLOBALS['heartrate'];
$respiration = $GLOBALS['respiration'];
$spo2 = $GLOBALS['spo2'];
$temperature = $GLOBALS['temperature'];



echo $heartrate;
echo $respiration;
echo $spo2;
echo $temperature;

$sql="insert into healthtable (Heartrate, Respiration, Spo2, Temperature)  values ($heartrate, $respiration, $spo2, $temperature)";




//Step 4
if ($conn->query($sql) === TRUE) {

  echo "<br>Health record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// Attempt delete query execution
$sql = 'DELETE FROM healthtable WHERE ID > 10';
if(mysqli_query($conn, $sql)){
    echo "<br>Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


//Step 5
$conn->close();
?>


 <script type='text/javascript'>
     // This will trigger your page to refresh 5s after it was loaded
     setTimeout(function(){ window.location.reload(true); },5000);
 </script>



</body>
</html>

    
