<!DOCTYPE html>
<html>
<head>
    <title>Services</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script >
        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };
    </script>

    <style >
        body{
            background: -webkit-linear-gradient(left, #3931af, #1abc9c);
        }
        .contact-form {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            border-top-right-radius: 10% 50%;
            border-bottom-right-radius: 10% 50%;
        }
    </style>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">


        <a class="navbar-brand js-scroll-trigger" href="dashboard.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class=""  aria-hidden="true"></i> <img src="images\icon1.png" width="50" height="60">&nbsp eHealth Monitoring System</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="margin-left:  5px; ">
            <ul class="navbar-nav ml-auto" style="margin-right:  1px; ">
                <li class="nav-item" style="margin-right: 20px;">

                    <a class="nav-link js-scroll-trigger" href="dashboard.php" style="font-size: 50px;color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>Dashboard</b></h6></a>
                </li>

                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link js-scroll-trigger" href="about.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>About Us</b></h6></a>
                </li>


                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link js-scroll-trigger" href="services.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>Services</b></h6></a>
                </li>


                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6><b>Contact Us</b></h6></a>
                </li>



                <li class="nav-item" style="margin-right: 1px;">
                    <a class="nav-link js-scroll-trigger" href="blockchain.php" style="color: #10f528;font-family: 'IBM Plex Sans', sans-serif; margin-left: 1px;"><h6>This application is secure &nbsp;<img src="    https://sdramproject.s3.us-east-2.amazonaws.com/css/secure.png" width="15" height="20"></h6></a>

                </li>


            </ul>
        </div>
    </div>
</nav>






<style>

    body {
        font-family: tahoma;
        height: 100vh;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
    }

    .our-team {
        padding: 30px 0 40px;
        margin-bottom: 30px;
        background-color: #ECEFF1;
        text-align: center;
        overflow: hidden;
        position: relative;
    }

    .our-team .picture {
        display: inline-block;
        height: 130px;
        width: 130px;
        margin-bottom: 50px;
        z-index: 1;
        position: relative;
    }

    .our-team .picture::before {
        content: "";
        width: 100%;
        height: 0;
        border-radius: 50%;
        background-color: #1abc9c;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        opacity: 0.9;
        transform: scale(3);
        transition: all 0.3s linear 0s;
    }

    .our-team:hover .picture::before {
        height: 100%;
    }

    .our-team .picture::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #1abc9c;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .our-team .picture img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        transform: scale(1);
        transition: all 0.9s ease 0s;
    }

    .our-team:hover .picture img {
        box-shadow: 0 0 0 14px #ECEFF1;
        transform: scale(0.7);
    }

    .our-team .title {
        display: block;
        font-size: 15px;

        text-transform: capitalize;
        color: #5b2885;
    }

    .our-team .social {
        width: 100%;
        padding: 0;
        margin: 0;
        background-color: #1abc9c;
        position: absolute;
        bottom: -100px;
        left: 0;
        transition: all 0.5s ease 0s;
    }

    .our-team:hover .social {
        bottom: 0;
    }

    .our-team .social li {
        display: inline-block;
    }

    .our-team .social li a {
        display: block;
        padding: 10px;
        font-size: 17px;
        color: white;
        transition: all 0.3s ease 0s;
        text-decoration: none;
    }

    .our-team .social li a:hover {
        color: #1369ce;
        background-color: #f7f5ec;
    }

    h2 {text-indent: 500px;
    }
    h3{


        font-size: 22px;
        color: #5b2885;

    }



</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class="main-header" style="width: 1200px;">
    <div class="wrap">


        <ul>


        </ul>
    </div>









    <br> <br> <br> <br>
   <br> <h2 style="color: white; margin-left: 60px; font-size: 30px;    font-family: 'Oswald', sans-serif;"><b> Our Services<b></h2>
    <br>
    <div class="container">
        <div class="row" style="margin-left: 150px;">

            <div class="our-team"style="width: 170px; height: 200px;">
                <div class="">
                    <img class="" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/ml.png" style="width: 100px; height:90px;">
                </div>
                <div class="team-content" >
                    <h3 class="name">Machine <br>Learning</h3>
                </div>

            </div>

            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="our-team"style="width: 170px; height: 200px;">
                <div class="">
                    <img class="img-fluid"           src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/block.png" style="width: 100px; height:100px;">

                </div>
                <div class="team-content">
                    <h3 class="name">Blockchain</h3>
                </div>


            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;

            <div class="our-team"style="width: 170px; height: 200px;">
                <div class="">
                    <img class="img-fluid"           src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/frontend.png" style="width: 100px; height:90px;">

                </div>
                <div class="team-content">
                    <h3 class="name">Frontend Development</h3>
                </div>


            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;

            <div class="our-team"style="width: 170px; height: 200px;">
                <div class="">
                    <img class="img-fluid"         src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/android.png" style="width: 90px; height:90px;">

                </div>
                <div class="team-content">
                    <h3 class="name">Android App Development</h3>
                </div>


            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;

            <div class="our-team"style="width: 170px; height: 200px;">
                <div class="">
                    <img class="img-fluid"               src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/cloud.png" style="width: 120px; height:100px;">

                </div>
                <div class="team-content">
                    <h3 class="name">Amazon Cloud Services</h3>
                </div>


            </div>

        </div>
            &nbsp;&nbsp;&nbsp;&nbsp;

            <div class="container">
                <div class="row" style="margin-left: 140px;">


                    <div class="our-team"style="width: 170px; height: 200px;">
                        <div class="">
                            <img class="" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/back.png" style="width: 100px; height:90px;">
                        </div>
                        <div class="team-content" >
                            <h3 class="name">Backend Development</h3>
                        </div>

                    </div>

                    &nbsp;&nbsp;&nbsp;&nbsp;




                    <div class="our-team"style="width: 170px; height: 200px;">
                        <div class="">
                            <img class="" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/iot.png" style="width: 100px; height:90px;">
                        </div>
                        <div class="team-content" >
                            <h3 class="name">Internet of Things (IoT)</h3>
                        </div>

                    </div>


&nbsp;&nbsp;&nbsp;&nbsp;


                    <div class="our-team"style="width: 170px; height: 200px;">
                        <div class="">
                            <img class="" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/py.png" style="width: 90px; height:90px;">
                        </div>
                        <div class="team-content" >
                            <h3 class="name">Python Programming</h3>
                        </div>

                    </div>


                    &nbsp;&nbsp;&nbsp;&nbsp;


                    <div class="our-team"style="width: 170px; height: 200px;">
                        <div class="">
                            <img class="" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/support.jpg" style="width: 100px; height:90px;">
                        </div>
                        <div class="team-content" >
                            <h3 class="name">Support & Maintenance</h3>
                        </div>

                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="our-team"style="width: 170px; height: 200px;">
                        <div class="">
                            <img class="" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/data-transformation.png" style="width: 90px; height:90px;">
                        </div>
                        <div class="team-content" >
                            <h3 class="name">Data Transformation</h3>
                        </div>

                    </div>





            </div>

    </div>







































<br><br><br>
<br><br>
        <div class="copy-tight">

            <p style="color: white; margin-left: 290px; font-size: 15px; font-family: 'IBM Plex Sans'">&copy;  2020 www.eHealth.com All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp; Powered by Illinois State University,&nbsp;Normal IL<p>
        </div>


        <div style='margin-left: 150px;display: flex;
    justify-content: center; '>
            <a href='//gmail.com' class='fa fa-google' style='padding: 10px; color: white;'></a>
            <a href='//whatsapp.com' class='fa fa-whatsapp' style='padding: 10px; color: white;'></a>
            <a href='//facebook.com' class='fa fa-facebook' style='padding: 10px; color: white;'></a>
            <a href='//twitter.com' class='fa fa-twitter' style='padding: 10px; color: white;'></a>
            <a href='//instagram.com' class='fa fa-instagram' style='padding: 10px; color: white;'></a>
            <a href='//linkedin.com' class='fa fa-linkedin' style='padding: 10px; color: white;'></a>
            <a href='//youtube.com' class='fa fa-youtube' style='padding: 10px; color: white;'></a>
        </div>

    </div>






</html>




