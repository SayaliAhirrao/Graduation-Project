<?php


//establishing the connection to the db.
  $conn=mysqli_connect("localhost","root","","healthdb");


//checking if there were any error during the last connection attempt
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//the SQL query to be executed
$query = "SELECT * FROM healthtable";

//storing the result of the executed query
$result = $conn->query($query);

//initialize the array to store the processed data
$jsonArray = array();

//check if there is any data returned by the SQL Query
if ($result->num_rows > 0) {
  //Converting the results into an associative array
  while($row = $result->fetch_assoc()) {
    $jsonArrayItem = array();
    $jsonArrayItem['PID'] = $row['pid'];

	  $jsonArrayItem['Temperature'] = $row['temp'];
      $jsonArrayItem['EKG'] = $row['ecg'];
      $jsonArrayItem['SPO2'] = $row['spo'];
      $jsonArrayItem['Respiration'] = $row['resp'];
    //append the above created object into the main array.
    array_push($jsonArray, $jsonArrayItem);
  }
}

//Closing the connection to DB
$conn->close();

//set the response content type as JSON
header('Content-type: application/json');
//output the return value of json encode using the echo function. 
echo json_encode($jsonArray);
?>
