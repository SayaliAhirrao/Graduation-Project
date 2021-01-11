<!DOCTYPE html>

<head>




    <title>eHealth Monitoring System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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




                .btn{
                    color: white;
                    background-color: #1abc9c;

                table{
                    margin: auto;
                    width: 99%;
                }

                td{
                    width: 500px;
                }

                #list-app, #list-pres, #list-settings, #list-health{
                    margin-left: 24%;
                }

                .table tr:hover{
                    background-color: transparent;
                    color: white;
                }



                }



            </style>




    </nav>





    <script type = "text/javascript"
            src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>


    <script language="javascript">

        function predict(Temp, SPO2, heartrate, Respiration) {
            alert("helloworld");
            var post_data = {Temp: Temp, SPO2: SPO2, heartrate: heartrate, Respiration: Respiration};
            $.ajax({
                url: 'http://127.0.0.1:10000/predict',
                data: post_data,
                type: 'POST',
                success: function (data) {
                    console.log(data);
                }
            });

        }

        $(document).ready(function() {

            $("#predict_btn").click(function(e){
                alert("test");
                e.preventDefault();
                predict(56.2,67,89,96);

            });


        }

    </script>


</head>


<body style="padding-top:50px; background: -webkit-linear-gradient(left, #3931af, #1abc9c); background-size: cover;">
<div class="container-fluid" style="margin-top:50px;">

    <style>

        .services-box:hover{
            color: white;
            background-color: #3350AB;

        }

        .services-box {
            color: #3350AB;
            background-color: #1abc9c;
            text-align: center;
            width: 200px;
            margin-left: 100px;
            height: 200px;
            text-transform: capitalize;
            border: 1px solid #e51937;
            padding: 15px;
        }
        .services-inner {
            display: grid;
            grid-template-rows: 1fr 1fr;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            grid-row-gap: 50px;
            grid-column-gap: 20px;
        }

        .list-group-item:hover{
            background-color: #1abc9c;
        }


        .table tr{
            background-color: white;
            color: black;
        }

        .table tr:hover{
            background-color: transparent;
            color: white;
        }

    </style>



            <div class="tab-pane fade" style="margin-left: 250px;" id="list-health" role="tabpanel" aria-labelledby="list-health-list">

                <table class="table" style="width: max-content;">
                    <thead>
                    <tr style="background-color: transparent;
               color: white;">


                        <th scope="col">Temperature</th>
                        <th scope="col">Heartrate</th>
                        <th scope="col">Respiration</th>
                        <th scope="col">SPO2</th>

                        <th scope="col">&nbsp; &nbsp;Status</th>
                        <th scope="col">&nbsp; &nbsp;Predict Result</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $con=mysqli_connect("localhost","root","","healthdb");
                    global $con;

                    $query = "select * from healthtable;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){


                        #$ecg = $row['Temperature'];
                        #$temp = $row['Heartrate'];
                        #$resp = $row['Respiration'];
                        #$spo = $row['Spo2'];


                        ?>
                        <tr>

                            <td><?php echo $row['Temperature'];?></td>
                            <td><?php echo $row['Heartrate'];?></td>
                            <td><?php echo $row['Respiration'];?></td>
                            <td><?php echo $row['Spo2'];?></td>

                            <td><?php echo $row['Status'];?></td>


                            <td> <button class="btn btn-success" name="predict_btn" >Predict Result</button></td>


                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>



            </div>

    </div>
</body>
</html>
