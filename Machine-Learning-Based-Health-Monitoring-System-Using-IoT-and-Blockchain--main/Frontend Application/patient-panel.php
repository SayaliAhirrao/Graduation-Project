<!DOCTYPE html>

<?php
include('func.php');
include('newfunc.php');
$con=mysqli_connect("localhost","root","","healthdb");


$pid = $_SESSION['pid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$gender = $_SESSION['gender'];
$age = $_SESSION['age'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];



if(isset($_POST['app-submit']))
{
    $pid = $_SESSION['pid'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $fname = $_SESSION['fname'];
    $gender = $_SESSION['gender'];
    $age = $_SESSION['age'];
    $lname = $_SESSION['lname'];
    $contact = $_SESSION['contact'];
    $doctor=$_POST['doctor'];
    $email=$_SESSION['email'];
    # $fees=$_POST['fees'];
    $docFees=$_POST['docFees'];

    $appdate=$_POST['appdate'];
    $apptime=$_POST['apptime'];
    $cur_date = date("Y-m-d");
    date_default_timezone_set('Asia/Kolkata');
    $cur_time = date("H:i:s");
    $apptime1 = strtotime($apptime);
    $appdate1 = strtotime($appdate);

    if(date("Y-m-d",$appdate1)>=$cur_date){
        if((date("Y-m-d",$appdate1)==$cur_date and date("H:i:s",$apptime1)>$cur_time) or date("Y-m-d",$appdate1)>$cur_date) {
            $check_query = mysqli_query($con,"select apptime from appointmenttable where doctor='$doctor' and appdate='$appdate' and apptime='$apptime'");

            if(mysqli_num_rows($check_query)==0){
                $query=mysqli_query($con,"insert into appointmenttable(pid,fname,lname,gender,age,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values('$pid','$fname','$lname','$gender','$age','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

                if($query)
                {
                    echo "<script>alert('Your appointment successfully booked');</script>";
                }
                else{
                    echo "<script>alert('Unable to process your request. Please try again!');</script>";
                }
            }
            else{
                echo "<script>alert('We are sorry to inform that the doctor is not available in this time or date. Please choose different time or date!');</script>";
            }
        }
        else{
            echo "<script>alert('Select a time or date in the future!');</script>";
        }
    }
    else{
        echo "<script>alert('Select a time or date in the future!');</script>";
    }

}

if(isset($_GET['cancel']))
{
    $query=mysqli_query($con,"update appointmenttable set userStatus='0' where ID = '".$_GET['ID']."'");
    if($query)
    {
        echo "<script>alert('Your appointment successfully cancelled');</script>";
    }
}


function generate_bill(){
    $con=mysqli_connect("localhost","root","","healthdb");
    $pid = $_SESSION['pid'];
    $output='';
    $query=mysqli_query($con,"select p.pid,p.ID,p.fname,p.lname,a.gender,a.age,p.doctor,p.appdate,p.apptime,p.disease,p.status,p.prescription,a.docFees from prescriptiontable p inner join appointmenttable a on p.ID=a.ID and p.pid = '$pid' and p.ID = '".$_GET['ID']."'");
    while($row = mysqli_fetch_array($query)){
        $output .= '
    <label> Patient ID : </label>'.$row["pid"].'<br/><br/>
    <label> Appointment ID : </label>'.$row["ID"].'<br/><br/>
    <label> Patient Name : </label>'.$row["fname"].' '.$row["lname"].'<br/><br/>
   <label> Patient Gender : </label>'.$row["gender"].'<br/><br/>
      <label> Patient Age : </label>'.$row["age"].'<br/><br/>
    <label> Doctor Name : </label>'.$row["doctor"].'<br/><br/>
    <label> Appointment Date : </label>'.$row["appdate"].'<br/><br/>
    <label> Appointment Time : </label>'.$row["apptime"].'<br/><br/>
    <label> Disease : </label>'.$row["disease"].'<br/><br/>
    <label> Status : </label>'.$row["status"].'<br/><br/>
    <label> Prescription : </label>'.$row["prescription"].'<br/><br/>
    <label> Fees Paid : </label>'.$row["docFees"].'<br/>
    
    ';


    }

    return $output;
}


if(isset($_GET["generate_bill"])){
    require_once("TCPDF/tcpdf.php");
    $obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
    $obj_pdf -> SetCreator(PDF_CREATOR);

    $obj_pdf -> SetTitle("Generate Invoice");
    $obj_pdf -> SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
    $obj_pdf -> SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $obj_pdf -> SetFooterFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
    $obj_pdf -> SetDefaultMonospacedFont('helvetica');
    $obj_pdf -> SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf -> SetMargins(PDF_MARGIN_LEFT,'5',PDF_MARGIN_RIGHT);
    $obj_pdf -> SetPrintHeader(false);
    $obj_pdf -> SetPrintFooter(false);
    $obj_pdf -> SetAutoPageBreak(TRUE, 10);
    $obj_pdf -> SetFont('helvetica','',12);
    $obj_pdf -> AddPage();

    $content = '';

    $content .= '
      <br/>
      <h2 align ="center"> eHealth Monitoring Systems</h2></br>
      <h3 align ="center"> Patient Invoice</h3>
      

  ';

    $content .= generate_bill();
    $obj_pdf -> writeHTML($content);
    ob_end_clean();
    $obj_pdf -> Output(   "invoice.pdf",'I');

}



function get_specs(){
    $con=mysqli_connect("localhost","root","","healthdb");
    $query=mysqli_query($con,"select username,spec from doctortable");
    $docarray = array();
    while($row =mysqli_fetch_assoc($query))
    {
        $docarray[] = $row;
    }
    return json_encode($docarray);
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
                .bg-primary {
                    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
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
                .services-inner {
                    display: grid;
                    grid-template-rows: 1fr 1fr;
                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                    grid-row-gap: 50px;
                    grid-column-gap: 20px;
                }


                .services-box {

                    background-color: #1abc9c;
                    text-align: center;
                    text-transform: capitalize;

                    padding: 15px;
                }

                #logout{
                    color: white;
                    font-weight:400;
                    transition: all 0.2s;
                    background-color: #2D6AA8;
                    display:inline-block;
                    padding:0.35em 1.2em;
                    margin-left: 780px;
                    float: right;
                }

                #logout:hover{
                    background-color: #1abc9c;
                }

            </style>




            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">

                        <a id="logout" style="" class="nav-link" href="logout.php"><i class="" aria-hidden="true"></i><b>Logout</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
    </nav>
</head>
<style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
</style>
<body style="padding-top:50px; background: -webkit-linear-gradient(left, #3931af, #1abc9c); background-size: cover;">


<div style="margin-top:50px;" class="container-fluid">
    <center><h3 style = "  padding-bottom: 20px; color:white;font-family: 'IBM Plex Sans', sans-serif;"> <b>Welcome to eHealth Monitoring System </b>&nbsp;<br><br><b>&nbsp;<?php echo "Patient Name:" ?></b>&nbsp;&nbsp; <?php echo $lname ?>, <?php echo $fname?> </center>
    </h3>

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
        <table style="width: 90%; margin: auto;">
            <tr>
                <td>
                    <a class="list-group-item list-group-item-action"  href="#list-home" id="list-home-list"  role="tab"    aria-controls="home" data-toggle="list">Book Appointment</a>
                </td>
                <td>
                    <a class="list-group-item list-group-item-action" href="#app-hist" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Appointment History</a>
                </td>
                <td>
                    <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Prescriptions</a>
                </td>
            </tr>
        </table>
    </div><br>


    <div class="col-md-8" style="margin-top: 3%;">
        <div class="tab-content" id="nav-tabContent" style="width: 950px;">


            <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                <div class="container-fluid container-fullw " >
                    <div class="row">
                        <div class="col-sm-4" style="left: 5%">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">

                                    <p class="links cl-effect-1">

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="left: 10%">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body" >


                                    <p class="cl-effect-1">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4" style="left: 20%;margin-top:5%">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body" >

                                <p class="cl-effect-1">

                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <style>
                .card{

                    margin-left: 250px;
                }





            </style>


            <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <div class="container-fluid" style="margin-right: 30px;">
                    <div class="card">
                        <div class="card-body" style="margin-left: 50px;">
                            <center><h4 style="color: #3350AB;">Create Appointment</h4></center><br>
                            <form class="form-group" method="post" action="patient-panel.php">
                                <div class="row">

                                    <!-- <?php

                                    $con=mysqli_connect("localhost","root","","healthdb");
                                    $query=mysqli_query($con,"select username,spec from doctortable");
                                    $docarray = array();
                                    while($row =mysqli_fetch_assoc($query))
                                    {
                                        $docarray[] = $row;
                                    }
                                    echo json_encode($docarray);

                                    ?> -->

                                    <div class="col-md-4">
                                        <label for="age">Age:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="age" class="form-control" id="age">
                                            <option value="">Select Age</option>
                                            <?php
                                            display_age();
                                            ?>
                                        </select>
                                    </div>

                                    <br><br>




                                    <div class="col-md-4">
                                        <label for="gender">Gender:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="gender" class="form-control" id="gender">
                                            <option value="" disabled selected>Select Gender</option>
                                            <?php
                                            display_gender();
                                            ?>
                                        </select>
                                    </div>

                                    <br><br>



                                    <div class="col-md-4">
                                        <label for="spec">Specialization:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="spec" class="form-control" id="spec">
                                            <option value="" disabled selected>Select Specialization</option>
                                            <?php
                                            display_specs();
                                            ?>
                                        </select>
                                    </div>

                                    <br><br>

                                    <script>
                                        document.getElementById('spec').onchange = function foo() {
                                            let spec = this.value;
                                            console.log(spec)
                                            let docs = [...document.getElementById('doctor').options];

                                            docs.forEach((el, ind, arr)=>{
                                                arr[ind].setAttribute("style","");
                                                if (el.getAttribute("data-spec") != spec ) {
                                                    arr[ind].setAttribute("style","display: none");
                                                }
                                            });
                                        };

                                    </script>

                                    <div class="col-md-4"><label for="doctor">Doctors:</label></div>
                                    <div class="col-md-8">
                                        <select name="doctor" class="form-control" id="doctor" required="required">
                                            <option value="" disabled selected>Select Doctor</option>

                                            <?php display_docs(); ?>
                                        </select>
                                    </div><br/><br/>


                                    <script>
                                        document.getElementById('doctor').onchange = function updateFees(e) {
                                            var selection = document.querySelector(`[value=${this.value}]`).getAttribute('data-value');
                                            document.getElementById('docFees').value = selection;
                                        };
                                    </script>







                                    <div  class="col-md-4"><label for="consultancyfees" >
                                            Consultancy Fees
                                        </label></div>
                                    <div class="col-md-8">
                                        <!-- <div id="docFees">Select a doctor</div> -->
                                        <input class="form-control" type="text" name="docFees" id="docFees" readonly="readonly"/>
                                    </div><br><br>

                                    <div class="col-md-4"><label>Appointment Date</label></div>
                                    <div class="col-md-8"><input type="date" class="form-control datepicker" name="appdate"></div><br><br>

                                    <div class="col-md-4"><label>Appointment Time</label></div>
                                    <div class="col-md-8">
                                        <!-- <input type="time" class="form-control" name="apptime"> -->
                                        <select name="apptime" class="form-control" id="apptime" required="required">
                                            <option value="" disabled selected>Select Time</option>
                                            <option value="08:00:00">8:00 AM</option>
                                            <option value="10:00:00">10:00 AM</option>
                                            <option value="12:00:00">12:00 PM</option>
                                            <option value="14:00:00">2:00 PM</option>
                                            <option value="16:00:00">4:00 PM</option>
                                        </select>

                                    </div><br><br>

                                    <style>

                                        #inputbtn{
                                            padding: 10px;
                                            background-color: #2D6AA8;
                                            border: none;
                                            color: white;
                                        }

                                        #inputbtn:hover{
                                            background-color: #1abc9c;
                                        }

                                    </style>

                                    <div class="col-md-4">
                                        <input type="submit" name="app-submit" style="width: 130px; font-size: 15px;" value="Create" id="inputbtn">
                                    </div>
                                    <div class="col-md-8"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><br>
            </div>



            <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list" style="margin-left: 220px;">

                <table class="table">
                    <thead>
                    <tr style="background-color: transparent;
               color: white;">

                        <th scope="col" style="color: white;">Doctor Name</th>
                        <th scope="col" style="color: white;">Patient Age</th>
                        <th scope="col" style="color: white;">Patient Gender</th>
                        <th scope="col" style="color: white;">Consultancy Fees</th>
                        <th scope="col" style="color: white;">Appointment Date</th>
                        <th scope="col" style="color: white;">Appointment Time</th>
                        <th scope="col"style="color: white;">Current Status</th>
                        <th scope="col"style="color: white;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $con=mysqli_connect("localhost","root","","healthdb");
                    global $con;

                    $query = "select ID,doctor,age,gender,docFees,appdate,apptime,userStatus,doctorStatus from appointmenttable where fname ='$fname' and lname='$lname';";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){

                        #$fname = $row['fname'];
                        #$lname = $row['lname'];
                        #$email = $row['email'];
                        #$contact = $row['contact'];
                        ?>
                        <tr>
                            <td><?php echo $row['doctor'];?></td>
                            <td><?php echo $row['age'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['docFees'];?></td>
                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>

                            <td>
                                <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))
                                {
                                    echo "Active";
                                }
                                if(($row['userStatus']==0) && ($row['doctorStatus']==1))
                                {
                                    echo "Cancelled by You";
                                }

                                if(($row['userStatus']==1) && ($row['doctorStatus']==0))
                                {
                                    echo "Cancelled by Doctor";
                                }
                                ?></td>

                            <td>
                                <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))
                                { ?>


                                    <a href="patient-panel.php?ID=<?php echo $row['ID']?>&cancel=update"
                                       onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                       title="Cancel Appointment" tooltip-placement="top" tooltip="Remove"><button class="btn btn-danger">Cancel</button></a>
                                <?php } else {

                                    echo "Cancelled";
                                } ?>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>
            </div>



            <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list" style="margin-left: 180px;">

                <table class="table">
                    <thead>
                    <tr style="background-color: transparent;
               color: white;">

                        <th scope="col" style="color: white;">Doctor Name</th>
                        <th scope="col"style="color: white;">Appointment ID</th>
                        <th scope="col"style="color: white;">Appointment Date</th>
                        <th scope="col"style="color: white;">Appointment Time</th>
                        <th scope="col"style="color: white;">Diseases</th>
                        <th scope="col"style="color: white;">Status</th>
                        <th scope="col"style="color: white;">Prescriptions</th>
                        <th scope="col"style="color: white;">Bill Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $con=mysqli_connect("localhost","root","","healthdb");
                    global $con;

                    $query = "select doctor,ID,appdate,apptime,disease,status,prescription from prescriptiontable where pid='$pid';";

                    $result = mysqli_query($con,$query);
                    if(!$result){
                        echo mysqli_error($con);
                    }


                    while ($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['doctor'];?></td>
                            <td><?php echo $row['ID'];?></td>
                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>
                            <td><?php echo $row['disease'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td><?php echo $row['prescription'];?></td>
                            <td>
                                <form method="get">


                                    <a href="patient-panel.php?ID=<?php echo $row['ID']?>">
                                        <input type ="hidden" name="ID" value="<?php echo $row['ID']?>"/>
                                        <input type = "submit" onclick="alert('Generate Successfully');" name ="generate_bill" class = "btn btn-success" value="Get Invoice"/>
                                    </a>
                            </td>
                            </form>


                        </tr>
                    <?php }
                    ?>
                    </tbody>
                </table>
                <br>
            </div>




            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <form class="form-group" method="post" action="func.php">
                    <label>Doctors name: </label>
                    <input type="text" name="name" placeholder="Enter doctors name" class="form-control">
                    <br>
                    <input type="submit" name="doc_sub" value="Add Doctor" class="btn btn-primary">
                </form>
            </div>
            <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
        </div>
    </div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
</script>



</body>





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
