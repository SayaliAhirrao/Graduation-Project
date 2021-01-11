<!DOCTYPE html>
<?php
include('func1.php');
$pid='';
$ID='';
$appdate='';
$apptime='';
$fname = '';
$lname= '';
$doctor = $_SESSION['dname'];
if(isset($_GET['pid']) && isset($_GET['ID']) && ($_GET['appdate']) && isset($_GET['apptime']) && isset($_GET['fname']) && isset($_GET['lname'])) {
$pid = $_GET['pid'];
  $ID = $_GET['ID'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $appdate = $_GET['appdate'];
  $apptime = $_GET['apptime'];
}



if(isset($_POST['prescribe']) && isset($_POST['pid']) && isset($_POST['ID']) && isset($_POST['appdate']) && isset($_POST['apptime']) && isset($_POST['lname']) && isset($_POST['fname'])){
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $disease = $_POST['disease'];
  $status = $_POST['status'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pid = $_POST['pid'];
  $ID = $_POST['ID'];
  $prescription = $_POST['prescription'];
  
  $query=mysqli_query($con,"insert into prescriptiontable(doctor,pid,ID,fname,lname,appdate,apptime,disease,status,prescription) values ('$doctor','$pid','$ID','$fname','$lname','$appdate','$apptime','$disease','$status','$prescription')");
    if($query)
    {
      echo "<script>alert('Prescribed successfully!');</script>";
    }
    else{
      echo "<script>alert('Unable to process your request. Try again!');</script>";
    }
  // else{
  //   echo "<script>alert('GET is not working!');</script>";
  // }initial
  // enga error?
}

?>

<html lang="en">
<head>

    <title>eHealth Monitoring System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">








    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
        <div class="container">

            <a class="navbar-brand js-scroll-trigger" href="dashboard.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class=""  aria-hidden="true"></i> <img src="images\icon1.png" width="50" height="60">&nbsp eHealth Monitoring System</h4></a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <style >
                body {
                    background: -webkit-linear-gradient(left, #3931af, #1abc9c);

                }
                .list-group-item.active {
                    z-index: 2;
                    color: #fff;
                    background-color: #342ac1;
                    border-color: #007bff;
                }
                .text-primary {
                    color: #342ac1!important;
                }

                .btn-primary{
                    background-color: #3c50c1;
                    border-color: #3c50c1;
                }


            </style>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">

           <a style="color: white;  font-weight:400;transition: all 0.2s;background-color: #2D6AA8;display:inline-block; padding:0.35em 1.2em;margin-left: 700px; float: right;" class="nav-link" href="logout.php"><i class="" aria-hidden="true"></i><b>Logout</b></a>

       </li>
       <li class="nav-item">
           <a style="color: white;  font-weight:400;transition: all 0.2s;background-color: #2D6AA8;display:inline-block; padding:0.35em 1.2em;margin-left: 10px; float: right;" class="nav-link" href="doctor-panel.php"><i class="" aria-hidden="true"></i><b>Back</b></a>


      </li>
    </ul>
  </div>
</nav>

</head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>

<body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
       <h3 style = "margin-left: 40%;  color: white; padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> <b> Doctor Name: </b>&nbsp<?php echo $doctor ?></h3>
        <h3 style = "margin-left: 42%; color: white;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Write Prescription</h3>




   <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
        <form class="form-group" name="prescribeform" method="post" action="prescribe.php">
        <br>


            <div class="row" style=" border: 1px solid white; width: 1000px; height: 400px; margin-left: 10%">
                <br><br>
                  <div style="color: white; font-size: 20px;" class="col-md-4"><label><br><b>Patient's Name:</b>&nbsp;<?php echo $lname ?>, <?php echo $fname ?></label></div>
                  <div class="col-md-8">
                  <!-- <input type="text" class="form-control" name="disease" required> -->

                  </div><br><br><br><br>

                <div style="color: white; font-size: 20px;" class="col-md-4"><label>Disease Detected:</label></div>
                <div class="col-md-8">
                    <!-- <input type="text" class="form-control" name="disease" required> -->
                    <textarea id="disease" cols="86" rows ="2" name="disease" required></textarea>
                </div><br><br><br>
                  
                  <div style="color: white; font-size: 20px;" class="col-md-4"><label>Patient Status:</label></div>
                  <div class="col-md-8">

                  <textarea id="status" cols="86" rows ="2" name="status" required></textarea>
                  </div><br><br><br>
              <div style="color: white; font-size: 20px;" class="col-md-4"><label>Prescription:</label></div>
                  <div class="col-md-8">
                  <!-- <input type="text" class="form-control"  name="prescription"  required> -->
                  <textarea id="prescription" cols="86" rows ="3" name="prescription" required></textarea>
                  </div><br><br><br>
                  <input type="hidden" name="fname" value="<?php echo $fname ?>" />
                  <input type="hidden" name="lname" value="<?php echo $lname ?>" />
                  <input type="hidden" name="appdate" value="<?php echo $appdate ?>" />
                  <input type="hidden" name="apptime" value="<?php echo $apptime ?>" />
                  <input type="hidden" name="pid" value="<?php echo $pid ?>" />
                  <input type="hidden" name="ID" value="<?php echo $ID ?>" />
                  <br>
          <input type="submit" name="prescribe" value="Prescribe" id="pres-btn" style="" >

        </form>
        <br>

      </div>
      </div>


        <style>
            #pres-btn{
                margin: auto;
                padding: 10px;
                background-color: #2D6AA8;
                font-size: 20px;
                color: white;
                margin-bottom: 10px;
                border: none;
            }

            #pres-btn:hover{
                background-color: #1abc9c;

            }

        </style>
   <br> <br> <br> <br> <br>
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


  
