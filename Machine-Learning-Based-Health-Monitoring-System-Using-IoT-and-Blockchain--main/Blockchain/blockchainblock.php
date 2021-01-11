<!DOCTYPE html>


<html lang="en" >
<head>
    <meta charset="UTF-8">

    <title>eHealth Monitoring System</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'><link rel="stylesheet" href="./blockstyle.css">

  
  
</head>
<body>
<!-- partial:index.partial.html -->
<br>
<h1 class="title" style="font-size:40px;"><b>eHealth Blockchain</b></h1>

<style>
ul li { 
     width: auto%;
     display: inline-block;
     text-align: center;
}
</style>  
    


	

  
  
  
 
 
  
  
  
 
 
  <ul>  
	    <?php //connect and select the database
    //

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

  // $sql = "select ID,Timestamp,Block,Proof, PreviousHash from blockchain WHERE ID=1";

 $sql = "select h.*,b.ID,b.Block,b.Proof,b.PreviousHash,b.Timestamp from healthtable h JOIN blockchain b ON h.ID WHERE b.ID=1 ";

    foreach ($conn->query($sql) as $row) {
       $li  = '<li> blid="' .$row['ID']. '"';
        $li .= ' bltim="' .$row['Timestamp']. '"';
        $li .= ' blno="' .$row['Block']. '"';
		 $li .= ' blpf="' .$row['Proof']. '"';
		  $li .= ' blpf="' .$row['Heartrate']. '"';
		   $li .= ' blpf="' .$row['Respiration']. '"';
		    $li .= ' blpf="' .$row['Spo2']. '"';
			 $li .= ' blpf="' .$row['Temperature']. '"';
		 

    
      
    }
    $conn = null;
?>
			

			


<section class="container" style="width:auto;">
  <article class="pricing-card">
    <div class="iconBx">
      <img src="https://sdramproject.s3.us-east-2.amazonaws.com/css/bblock.png" alt=""  style='width: 100px; height:80px;'>
    </div>

   
   
  <ul class="pricing-feature" style="font-size:15px;">
		<li class="blid" > Block ID:  <?php echo $row['ID'];?></li>
		<li class="bltim">Timestamp: <?php echo $row['Timestamp'];?></li>
		<li class="blno">Block No:<?php echo $row['Block'];?></li>
		<li class="blpf">Heartrate:<?php echo $row['Heartrate'];?></li>
			<li class="blpf">Respiration:<?php echo $row['Respiration'];?></li>
				<li class="blpf">Spo2:<?php echo $row['Spo2'];?></li>
					<li class="blpf">Temperature:<?php echo $row['Temperature'];?></li>
						<li class="blpf">Proof:<?php echo $row['Proof'];?></li>
<li id="blph" style= "word-break: break-all;">Previous Hash: <?php echo $row['PreviousHash'];?></li>

 </ul>
	
  </article>
  
  
 
 
   <ul>  
	    <?php //connect and select the database
    //

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

 $sql = "select h.*,b.ID,b.Block,b.Proof,b.PreviousHash,b.Timestamp from healthtable h JOIN blockchain b ON h.ID WHERE b.ID=2 ";

    foreach ($conn->query($sql) as $row) {
       $li  = '<li> blid="' .$row['ID']. '"';
        $li .= ' bltim="' .$row['Timestamp']. '"';
        $li .= ' blno="' .$row['Block']. '"';
		 $li .= ' blpf="' .$row['Proof']. '"';
		  $li .= ' blpf="' .$row['Heartrate']. '"';
		   $li .= ' blpf="' .$row['Respiration']. '"';
		    $li .= ' blpf="' .$row['Spo2']. '"';
			 $li .= ' blpf="' .$row['Temperature']. '"';
		 

    
      
    }
    $conn = null;
?>
			


<section class="container" style="width:auto;">
  <article class="pricing-card">
    <div class="iconBx">
      <img src="https://sdramproject.s3.us-east-2.amazonaws.com/css/bblock.png" alt=""  style='width: 100px; height:80px;'>
    </div>

   
  <ul class="pricing-feature" style="font-size:15px;">
		<li class="blid" > Block ID:  <?php echo $row['ID'];?></li>
		<li class="bltim">Timestamp: <?php echo $row['Timestamp'];?></li>
		<li class="blno">Block No:<?php echo $row['Block'];?></li>
		<li class="blpf">Heartrate:<?php echo $row['Heartrate'];?></li>
			<li class="blpf">Respiration:<?php echo $row['Respiration'];?></li>
				<li class="blpf">Spo2:<?php echo $row['Spo2'];?></li>
					<li class="blpf">Temperature:<?php echo $row['Temperature'];?></li>
						<li class="blpf">Proof:<?php echo $row['Proof'];?></li>
<li id="blph" style= "word-break: break-all;">Previous Hash: <?php echo $row['PreviousHash'];?></li>

 </ul>
	
  </article>
  
 
 
 
 
 
 
 
   <ul>  
	    <?php //connect and select the database
    //

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
 $sql = "select h.*,b.ID,b.Block,b.Proof,b.PreviousHash,b.Timestamp from healthtable h JOIN blockchain b ON h.ID WHERE b.ID=3 ";

    foreach ($conn->query($sql) as $row) {
       $li  = '<li> blid="' .$row['ID']. '"';
        $li .= ' bltim="' .$row['Timestamp']. '"';
        $li .= ' blno="' .$row['Block']. '"';
		 $li .= ' blpf="' .$row['Proof']. '"';
		  $li .= ' blpf="' .$row['Heartrate']. '"';
		   $li .= ' blpf="' .$row['Respiration']. '"';
		    $li .= ' blpf="' .$row['Spo2']. '"';
			 $li .= ' blpf="' .$row['Temperature']. '"';
		 

    
      
    }
    $conn = null;
?>
			


<section class="container" style="width:auto;">
  <article class="pricing-card">
    <div class="iconBx">
      <img src="https://sdramproject.s3.us-east-2.amazonaws.com/css/bblock.png" alt=""  style='width: 100px; height:80px;'>
    </div>

   
   
  <ul class="pricing-feature" style="font-size:15px;">
		<li class="blid" > Block ID:  <?php echo $row['ID'];?></li>
		<li class="bltim">Timestamp: <?php echo $row['Timestamp'];?></li>
		<li class="blno">Block No:<?php echo $row['Block'];?></li>
		<li class="blpf">Heartrate:<?php echo $row['Heartrate'];?></li>
			<li class="blpf">Respiration:<?php echo $row['Respiration'];?></li>
				<li class="blpf">Spo2:<?php echo $row['Spo2'];?></li>
					<li class="blpf">Temperature:<?php echo $row['Temperature'];?></li>
						<li class="blpf">Proof:<?php echo $row['Proof'];?></li>
<li id="blph" style= "word-break: break-all;">Previous Hash: <?php echo $row['PreviousHash'];?></li>

 </ul>
	
  </article>
  
 
 
 
 
 
 
 
 
 

 
  
  
 


</section>
<!-- partial -->
  
</body>
</html>
