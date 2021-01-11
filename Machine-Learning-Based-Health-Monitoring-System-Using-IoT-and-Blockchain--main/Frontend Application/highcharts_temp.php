<!--
Created By Daniyal Beg and Sheema Saleem
-->

<html>
	<head>
		<title>eHealth Monitoring System</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
		<link rel="stylesheet" type="text/css" href="style1.css">
		<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="highcharts.js"></script>
<script src="highcharts-more.js"></script>
<script src="exporting.js"></script>
		 
	</head>
	<body>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
		<div class="container">

			<a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class=""  aria-hidden="true"></i> <img src="images\icon1.png" width="50" height="60">&nbsp eHealth Monitoring System</h4></a>
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

	<br>
	<br>
		<br>
	<br>
		<br>
	<br>
		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	<br>
	<br>
	<br><br><br><br><br>
	<br>
	<br><br>
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

	<script>
$(function () {

    var ranges = [
            [1246406400000, 14.5, 27.7],
            [1246492800000, 14.5, 27.8],
            [1246579200000, 15.5, 29.6],
            [1246665600000, 16.7, 30.7],
            [1246752000000, 16.5, 25.0],
            [1246838400000, 17.8, 25.7],
            [1246924800000, 13.5, 24.8],
            [1247011200000, 10.5, 21.4],
            [1247097600000, 9.2, 23.8],
            [1247184000000, 11.6, 21.8],
            [1247270400000, 10.7, 23.7],
            [1247356800000, 11.0, 23.3],
            [1247443200000, 11.6, 23.7],
            [1247529600000, 11.8, 20.7],
            [1247616000000, 12.6, 22.4],
            [1247702400000, 13.6, 19.6],
            [1247788800000, 11.4, 22.6],
            [1247875200000, 13.2, 25.0],
            [1247961600000, 14.2, 21.6],
            [1248048000000, 13.1, 17.1],
            [1248134400000, 12.2, 15.5],
            [1248220800000, 12.0, 20.8],
            [1248307200000, 12.0, 17.1],
            [1248393600000, 12.7, 18.3],
            [1248480000000, 12.4, 19.4],
            [1248566400000, 12.6, 19.9],
            [1248652800000, 11.9, 20.2],
            [1248739200000, 11.0, 19.3],
            [1248825600000, 10.8, 17.8],
            [1248912000000, 11.8, 18.5],
            [1248998400000, 10.8, 16.1]
        ],
        averages = [
            [1246406400000, 26.5],
            [1246492800000, 22.1],
            [1246579200000, 23],
            [1246665600000, 23.8],
            [1246752000000, 21.4],
            [1246838400000, 21.3],
            [1246924800000, 18.3],
            [1247011200000, 15.4],
            [1247097600000, 16.4],
            [1247184000000, 17.7],
            [1247270400000, 17.5],
            [1247356800000, 17.6],
            [1247443200000, 17.7],
            [1247529600000, 16.8],
            [1247616000000, 17.7],
            [1247702400000, 16.3],
            [1247788800000, 17.8],
            [1247875200000, 18.1],
            [1247961600000, 17.2],
            [1248048000000, 14.4],
            [1248134400000, 13.7],
            [1248220800000, 15.7],
            [1248307200000, 14.6],
            [1248393600000, 15.3],
            [1248480000000, 15.3],
            [1248566400000, 15.8],
            [1248652800000, 15.2],
            [1248739200000, 14.8],
            [1248825600000, 14.4],
            [1248912000000, 15],
            [1248998400000, 13.6]
        ];


    $('#container').highcharts({

        title: {
            text: 'Patients Temperature'
        },



        xAxis: {
            type: 'datetime'
        },

        yAxis: {
            title: {
                text: null
            }
        },

        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: '°C'
        },

        legend: {
        },



        series: [{
            name: 'Temperature',
            data: averages,
            zIndex: 1,
            marker: {
                fillColor: 'yellow',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Range',
            data: ranges,
            type: 'arearange',
            lineWidth: 0,
            linkedTo: ':previous',
            color: Highcharts.getOptions().colors[0],
            fillOpacity: 0.3,
            zIndex: 0
        }]
    });
});
 </script>
	</body>
</html>

