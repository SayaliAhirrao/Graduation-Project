<!DOCTYPE html>
<?php
header('Access-Control-Allow-Origin: *');



include('func1.php');
$con=mysqli_connect("localhost","root","","healthdb");
$doctor = $_SESSION['dname'];
if(isset($_GET['cancel']))
{
    $query=mysqli_query($con,"update appointmenttable set doctorStatus='0' where ID = '".$_GET['ID']."'");
    if($query)
    {
        echo "<script>alert('Your appointment successfully cancelled');</script>";
    }
}



?>



<html lang="en">
<head>




    <title>eHealth Monitoring System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">-->
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


            <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
                <input class="form-control mr-sm-2"  type="text" placeholder="Enter contact number" aria-label="Search" name="contact">
                <input type="submit" class="btn btn-primary" id="inputbtn" name="search_submit" value="Search">
            </form>
            <div>
                <a href="logout.php"><button id="button-log"><b>Logout</b></button></a>
            </div>

            <style>

                #button-log{
                    background-color: #2D6AA8;
                    border: none;
                    font-weight:400;
                    color: white;
                    transition: all 0.2s;
                    padding:0.35em 1.2em;
                    margin-right: 5px;
                    float: right;
                    margin-left: 100px;
                }


                #button-log:hover{
                    background-color: #1abc9c;
                }

            </style>

    </nav>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <script>
        $(document).ready(function(){
            $(".btn-success").click(function() {

                var $Age = $(this).closest("tr")   // Finds the closest row <tr>
                    .find(".healthage")     // Gets a descendent with class="nr"
                    .text();         // Retrieves the text within <td>

                var $Sex = $(this).closest("tr")   // Finds the closest row <tr>
                    .find(".healthsex")     // Gets a descendent with class="nr"
                    .text();         // Retrieves the text within <td>

                var $temp = $(this).closest("tr")   // Finds the closest row <tr>
                    .find(".healthtemp")     // Gets a descendent with class="nr"
                    .text();         // Retrieves the text within <td>

                var $heartrate = $(this).closest("tr")   // Finds the closest row <tr>
                    .find(".healthheartrate")     // Gets a descendent with class="nr"
                    .text();         // Retrieves the text within <td>

                var $spo2 = $(this).closest("tr")   // Finds the closest row <tr>
                    .find(".healthspo2")     // Gets a descendent with class="nr"
                    .text();         // Retrieves the text within <td>

                var $respiration = $(this).closest("tr")   // Finds the closest row <tr>
                    .find(".healthresp")     // Gets a descendent with class="nr"
                    .text();         // Retrieves the text within <td>



                // var $health_table = JSON.stringify({ 'Age': 47, 'Sex': "M", 'Temp': $temp, 'Respiration': $respiration, 'SPO2': $spo2, 'heartrate':$heartrate})


                $.ajax({
                    'url' : 'http://127.0.0.1:10000/hello',
                    'type' : 'POST',
                    contentType: "application/json",
                    data: JSON.stringify({ 'Age': $Age, 'Sex': $Sex, 'Temp': $temp, 'Respiration': $respiration, 'SPO2': $spo2, 'heartrate':$heartrate}),

                    beforeSend: function() {

                    },
                    error: function() {
                        alert('Error');
                    },
                    'success' : function(data) {
                        alert(data);
                        if (data == "success") {
                            alert('request sent!');
                        }
                    }
                });

            });
        });
    </script>
















</head>

<style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
</style>
<body style="padding-top:50px; background: -webkit-linear-gradient(left, #3931af, #1abc9c); background-size: cover;">


<div class="container-fluid" style="margin-top:50px;">
    <center> <h3 style = "  padding-bottom: 20px; color:white;font-family: 'IBM Plex Sans', sans-serif;"> <b>Welcome to eHealth Monitoring System </b>&nbsp;<br><br><b>&nbsp;<?php echo "Doctor Name:" ?></b> &nbsp<?php echo $_SESSION['dname'] ?> </center> </h3>
    <br>

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


    <div class="list-group" id="list-tab" role="tablist">
        <table>
            <tr>
                <td>
                    <a class="list-group-item list-group-item-action"  href="#list-app" id="list-app-list"  role="tab"    aria-controls="home" data-toggle="list">Patient's Appointment</a>
                </td>
                <td>
                    <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Prescription List</a>
                </td>
                <td>
                    <a class="list-group-item list-group-item-action" href="#list-health" id="list-health-list"  role="tab" data-toggle="list" aria-controls="home">Patient's Health Data</a>
                </td>
            </tr>
        </table>
    </div><br>


    <div class="col-md-8" style="margin-top: 5%;">
        <div class="tab-content" id="nav-tabContent" style="width: 950px; align-content: center;">


            <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">

                <div class="container-fluid container-fullw " >
                    <div class="row">

                        <div class="col-sm-4" style="left: 10%">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">


                                    <p class="links cl-effect-1">

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="left: 15%; color: white;">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">

                                    <p class="links cl-effect-1">

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="tab-pane fade" style="margin-left:5px;" id="list-app" role="tabpanel" aria-labelledby="list-home-list" >

                <table class="table">
                    <thead>
                    <tr style="background-color: transparent;
               color: white;">
                        <th scope="col">Patient ID</th>
                        <th scope="col">Appointment ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                        <th scope="col">Current Status</th>
                        <th scope="col">Action</th>
                        <th scope="col">Prescribe</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $con=mysqli_connect("localhost","root","","healthdb");
                    global $con;
                    $dname = $_SESSION['dname'];
                    $query = "select pid,ID,fname,lname,gender,email,contact,appdate,apptime,userStatus,doctorStatus from appointmenttable where doctor='$dname';";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['pid'];?></td>
                            <td><?php echo $row['ID'];?></td>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['contact'];?></td>
                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>
                            <td>
                                <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))
                                {
                                    echo "Active";
                                }
                                if(($row['userStatus']==0) && ($row['doctorStatus']==1))
                                {
                                    echo "Cancelled by Patient";
                                }

                                if(($row['userStatus']==1) && ($row['doctorStatus']==0))
                                {
                                    echo "Cancelled by You";
                                }
                                ?></td>

                            <td>
                                <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))
                                { ?>


                                    <a href="doctor-panel.php?ID=<?php echo $row['ID']?>&cancel=update"
                                       onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                       title="Cancel Appointment" tooltip-placement="top" tooltip="Remove"><button style="border: none; " class="btn btn-danger">Cancel</button></a>
                                <?php } else {

                                    echo "Cancelled";
                                } ?>

                            </td>

                            <td>

                                <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))
                                { ?>

                                    <a href="prescribe.php?pid=<?php echo $row['pid']?>&ID=<?php echo $row['ID']?>&fname=<?php echo $row['fname']?>&lname=<?php echo $row['lname']?>&appdate=<?php echo $row['appdate']?>&apptime=<?php echo $row['apptime']?>"
                                       tooltip-placement="top" tooltip="Remove" title="prescribe">
                                        <button class="btn btn-success">Prescibe</button></a>
                                <?php } else {

                                    echo "-";
                                } ?>

                            </td>


                        </tr></a>
                    <?php } ?>
                    </tbody>
                </table>
                <br>
            </div>



            <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
                <table class="table" style="margin-left: 150px; ">
                    <thead>
                    <tr style="background-color: transparent;
                      color: white;">

                        <th scope="col">Patient ID</th>

                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Appointment ID</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                        <th scope="col">Disease</th>
                        <th scope="col">Status</th>
                        <th scope="col">Prescribe</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $con=mysqli_connect("localhost","root","","healthdb");
                    global $con;

                    $query = "select pid,fname,lname,ID,appdate,apptime,disease,status,prescription from prescriptiontable where doctor='$doctor';";

                    $result = mysqli_query($con,$query);
                    if(!$result){
                        echo mysqli_error($con);
                    }


                    while ($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['pid'];?></td>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['ID'];?></td>

                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>
                            <td><?php echo $row['disease'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td><?php echo $row['prescription'];?></td>

                        </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
            </div>




            <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Consultancy Fees</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $con=mysqli_connect("localhost","root","","healthdb");
                    global $con;

                    $query = "select * from appointmenttable;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){

                        #$fname = $row['fname'];
                        #$lname = $row['lname'];
                        #$email = $row['email'];
                        #$contact = $row['contact'];
                        ?>
                        <tr>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['contact'];?></td>
                            <td><?php echo $row['doctor'];?></td>
                            <td><?php echo $row['docFees'];?></td>
                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>
            </div>


            <div class="tab-pane fade" style="margin-left: 40px;" id="list-health" role="tabpanel" aria-labelledby="list-health-list">

                <table class="table" style="width: max-content;">
                    <thead>
                    <tr style="background-color: transparent;
               color: white;">

                        <th scope="col">Patient ID</th>
                        <th scope="col">Block No</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">Proof</th>
                        <th scope="col">Previous Hash</th>
                        <th scope="col">&nbsp; &nbsp;Patient Name</th>
                        <th scope="col">&nbsp; &nbsp;Age</th>
                        <th class="dropdown-content" scope="col">&nbsp; &nbsp;Sex</th>
                        <th scope="col">Temperature</th>
                        <th scope="col">Heartrate</th>
                        <th scope="col">Respiration</th>
                        <th scope="col">SPO2</th>

                        <th scope="col">&nbsp; &nbsp;Predict Result</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $con=mysqli_connect("localhost","root","","healthdb");
                    global $con;

                    $query = "select h.*,a.age,a.gender,a.fname,b.Block,b.Proof,b.PreviousHash,b.Timestamp from healthtable h JOIN appointmenttable a ON h.ID=a.ID JOIN blockchain b ON a.ID=b.ID";

                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){



                        ?>
                        <tr class="healthrow">
                            <td class="healthid"><?php echo $row['ID'];?></td>
                            <td class="healthblock"><?php echo $row['Block'];?></td>
                            <td class="healthtime"><?php echo $row['Timestamp'];?></td>
                            <td style="  word-break: break-all;" class="healthhash"><?php echo $row['Proof'];?></td>
                            <td style="  word-break: break-all;" class="healthprevhash"><?php echo $row['PreviousHash'];?></td>
                            <td class="healthfname"><?php echo $row['fname'];?></td>
                            <td class="healthage"><?php echo $row['age'];?></td>
                            <td class="healthsex"><?php echo $row['gender'];?></td>
                            <td class="healthtemp"><?php echo $row['Temperature'];?></td>
                            <td class="healthheartrate"><?php echo $row['Heartrate'];?></td>
                            <td class="healthresp"><?php echo $row['Respiration'];?></td>
                            <td class="healthspo2"><?php echo $row['Spo2'];?></td>




                            <td> <button class="btn btn-success"  >Predict Result</button></td>



                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>



            </div>







            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <form class="form-group" method="post" action="admin-panel1.php">
                    <div class="row">
                        <div class="col-md-4"><label>Doctor Name:</label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="doctor" required></div><br><br>
                        <div class="col-md-4"><label>Password:</label></div>
                        <div class="col-md-8"><input type="password" class="form-control"  name="dpassword" required></div><br><br>
                        <div class="col-md-4"><label>Email ID:</label></div>
                        <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                        <div class="col-md-4"><label>Consultancy Fees:</label></div>
                        <div class="col-md-8"><input type="text" class="form-control"  name="docFees" required></div><br><br>
                    </div>
                    <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
                </form>
            </div>
            <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
        </div>
    </div>
    </li>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>




</body>


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
