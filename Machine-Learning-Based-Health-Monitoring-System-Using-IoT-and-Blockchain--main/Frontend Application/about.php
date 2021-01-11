<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
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
       
    
    
      
      <div class="main-header">
          <div class="wrap">
            
        
                          <ul>
                           
                             
                          </ul>
                      </div>




    
    <br>
       <br><br>
          <br>
             <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br><br>  <br><br><br><br>
          <br> <br> <h2 style="color: white; margin-left: 40px; font-size: 30px;    font-family: 'Oswald', sans-serif;"><b> Meet the Team<b></h2>
          <br>
          <div class="container" style="width: 1500px">
        <div class="row" style="margin-left: 60px; width: 1100px;">
          
            <div class="our-team"style="width: 210px;">
              <div class="picture">
                <img class="img-fluid" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/say.jpeg">
              </div>
              <div class="team-content" >
                <h3 class="name">Sayali Ahirrao</h3>
                <p class="title">Machine Learning </p>
                <h4 class="title">School of Information Technology</h4>
                <p class="title">Illinois State University</p>
              </div>
              <ul class="social">
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            
          </div>
             
          <div class="our-team" style="width: 210px; left: 20px;" >
              <div class="picture">
                <img class="img-fluid" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/dan.jpg">
              </div>
              <div class="team-content">
                <h3 class="name">Daniyal Mirza</h3>
                <p class="title">Full Stack Developer</p>
                <h4 class="title">School of Information Technology</h4>
                <p class="title">Illinois State University</p>
              </div>
              <ul class="social">
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            
          </div>
    
          
            <div class="our-team"style="width: 210px; left: 40px;">
              <div class="picture">
                <img class="img-fluid" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/rek.jpg">
              </div>
              <div class="team-content">
                <h3 class="name">Rekha Peri</h3>
            
                <p class="title">Backend Developer</p>
                <h4 class="title">School of Information Technology</h4>
                <p class="title">Illinois State University</p>
              </div>
              <ul class="social">
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            
          </div>
    
         
            <div class="our-team"style="width: 210px; left:60px;">
              <div class="picture">
                <img class="img-fluid" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/ars.jpg">
              </div>
              <div class="team-content">
                <h3 class="name">Arsalan Siddiqui</h3>
                <p class="title">Blockchain Security</p>
                <h4 class="title">School of Information Technology</h4>
                <p class="title">Illinois State University</p>
              </div>
              <ul class="social">
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            
          </div>
          
           <div class="our-team"style="width: 210px; left:80px;">
              <div class="picture">
                <img class="img-fluid" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/milli.png">
              </div>
              <div class="team-content">
                <h3 class="name">Mildred Agallo</h3>
                <p class="title">Android App Developer</p>
                <h4 class="title">School of Information Technology</h4>
                <p class="title">Illinois State University</p>
              </div>
              <ul class="social">
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            
          </div>
    
    
     
          <h2 style="color: white; font-size: 30px;margin-left: 35px; font-family: 'Oswald', sans-serif;"><b> Mentors</b></h2>
            <br><br><br>
          <div class="container">
            <div class="row">
          <br>
    
            <div class="our-team"style="width: 210px; left: 350px;">
              <div class="picture">
                <img class="img-fluid" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/jihad.jpg"style="width: 150px; height:130px;">
              </div>
              <div class="team-content">
                <h3 class="name">Dr. Jihad Qaddour</h3>
                <p class="title">Associate Professor</p>
                <h4 class="title">School of Information Technology</h4>
                <p class="title">Illinois State University</p>
              </div>
              <ul class="social">
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
           
          </div>
           
    
          
            <div class="our-team"style="width: 210px; left: 370px;">
              <div class="picture">
                <img class="img-fluid" src="https://sdramproject.s3.us-east-2.amazonaws.com/angular-8-registration-login-example-master/angular-8-registration-login-example-master/src/app/css/sami.jpg">
              </div>
              <div class="team-content">
                <h3 class="name">Dr. Sameeh Ullah</h3>
                <p class="title">Associate Professor</p>
                <h4 class="title">School of Information Technology</h4>
                <p class="title">Illinois State University</p>
              </div>
              <ul class="social">
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
              </ul>
            </div>
    
    
     
    </div>

              <div class="copy-tight">

                  <p style="color: white; text-align: center; font-size: 15px; font-family: 'IBM Plex Sans'">&copy;  2020 www.eHealth.com All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp; Powered by Illinois State University,&nbsp;Normal IL<p>
              </div>


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

    </div>






            <br><br>


<!---start-copy-right----->

<!---End-copy-right----->






</html>



