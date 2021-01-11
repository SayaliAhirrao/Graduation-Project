<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>eHealth Monitoring System</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="style2.css">



  </head>


<!------ Include the above in your HEAD tag ---------->
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class=""  aria-hidden="true"></i> <img src="images\icon1.png" width="50" height="60">&nbsp eHealth Monitoring System</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px; ">
            <a class="nav-link js-scroll-trigger" href="dashboard.php" style="font-size: 50px;color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>Dashboard</b></h6></a>
          </li>

          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>About Us</b></h6></a>
          </li>


  <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>Services</b></h6></a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>Contact Us</b></h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
    .card{
    background: #f8f9fa;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
}

  </style>
  <body style="background: -webkit-linear-gradient(left, #3931af, #1abc9c); background-size: cover;">



    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">





         <div class="col-md-4" style="margin-top: 6%;right: 8%; margin-left: 40%;">
          <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="card-body">
              <center>
                <img src="https://pngimage.net/wp-content/uploads/2018/06/hasta-png-9.png" width="130px;" height="130px;">

              <h3 style="margin-top: 10%">Patient Login</h3>
              <form class="form-group" method="POST" action="func.php">
                <div class="row" style="margin-top: 10%">
                  <div class="col-md-4"><label>Email ID: </label></div>
                  <div class="col-md-8"><input type="text" name="email" class="form-control" placeholder="Email ID&nbsp;*" required/></div><br><br>
                  <div class="col-md-4" style="margin-top: 8%"><label>Password: </label></div>
                  <div class="col-md-8" style="margin-top: 8%"><input type="password" class="form-control" name="password2" placeholder="Password&nbsp;*" required/></div><br><br><br>
                </div>
                <div class="row">
                 <div class="col-md-4"  style="padding-left: 160px;margin-top: 10%">
                    <center><input type="submit" id="inputbtn" name="patsub" value="Login" class="btn" style="background-color: #1abc9c; color: white; font-weight: bold;"></center></div>
                 <!--  <div class="col-md-8" style="margin-top: 10%">
                    <a href="dashboard.php" class="btn btn-primary">Back</a></div> -->
                </div>
              </form>
            </center>
            </div>
          </div>
        </div>


      </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>




<br>
<br>
<br><br>
<br>

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