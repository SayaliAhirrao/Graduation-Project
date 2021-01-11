<?php
session_start();
$con=mysqli_connect("localhost","root","","healthdb");
if(isset($_POST['search_submit'])){
  $contact=$_POST['contact'];
  $docname = $_SESSION['dname'];
 $query="select * from appointmenttable where contact='$contact' and doctor='$docname';";
 $result=mysqli_query($con,$query);
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
  
   <title>eHealth Monitoring System</title>
      <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style>
  body {
    background: -webkit-linear-gradient(left, #3931af, #1abc9c);
   
}
 </style> 
  <body style="color:white;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3>Search Results</h3></center><br>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Appointment Date</th>
      <th>Appointment Time</th>
    </tr>
  </thead>
  <tbody>
  
  
  
  
  
  ';
  while($row=mysqli_fetch_array($result)){
    $fname=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $appdate=$row['appdate'];
    $apptime=$row['apptime'];
    echo '<tr>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
      <td>'.$contact.'</td>
      <td>'.$appdate.'</td>
      <td>'.$apptime.'</td>
    </tr>';
  }
echo '</tbody></table></div> 
<div><a href="doctor-panel.php" class="btn btn-light">Go Back</a></div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
  
  
  </body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</html>';
}



?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!---start-copy-right----->
<div class="copy-tight">

    <p style="color: white; text-align: center; font-size: 15px; font-family: 'IBM Plex Sans'">&copy;  2020 www.eHealth.com All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp; Powered by Illinois State University,&nbsp;Normal IL<p>
</div>
<!---End-copy-right----->




<div style='align-items: center;display: flex;
    justify-content: center; '>
    <a href='//gmail.com' class='fa fa-google' style='padding: 10px; color: white;'></a>
    <a href='//whatsapp.com' class='fa fa-whatsapp' style='padding: 10px; color: white;'></a>
    <a href='//facebook.com' class='fa fa-facebook' style='padding: 10px; color: white;'></a>
    <a href='//twitter.com' class='fa fa-twitter' style='padding: 10px; color: white;'></a>
    <a href='//instagram.com' class='fa fa-instagram' style='padding: 10px; color: white;'></a>
    <a href='//linkedin.com' class='fa fa-linkedin' style='padding: 10px; color: white;'></a>
    <a href='//youtube.com' class='fa fa-youtube' style='padding: 10px; color: white;'></a>
</div>

</html>


