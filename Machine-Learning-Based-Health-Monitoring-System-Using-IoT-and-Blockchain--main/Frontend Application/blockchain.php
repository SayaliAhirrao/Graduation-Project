<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">

    <title>eHealth Monitoring System</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon1.png" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">





</head>
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

                <li class="nav-item">

            </ul>
        </div>
    </div>
</nav>
<br><br>
<!-- partial:index.partial.html -->
<div class="container">
    <h1>eHealth Blockchain</h1>

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
    // get the contents of the JSON file
    $jsonCont = file_get_contents('http://127.0.0.1:8000/mine_healthdata'); //decode JSON data to PHP array
    echo $jsonCont;
    $data = json_decode($jsonCont, true); //Fetch the details of Student
    $Block = $data['block'];
    $PreviousHash = $data['previous_hash'];
    $Proof = $data['proof'];


    $sql = "INSERT INTO blockchain (Block, Proof, PreviousHash)
VALUES ('$Block', '$Proof', '$PreviousHash')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    // Attempt delete query execution
    $sql = 'DELETE FROM blockchain WHERE ID > 6';
    if(mysqli_query($conn, $sql)){
        echo "<br>Records were deleted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    $conn->close();
    ?>

    <script type='text/javascript'>
        // This will trigger your page to refresh 5s after it was loaded
        setTimeout(function(){ window.location.reload(true); },5000);
    </script>

    <br>   <br>

    <style>
        table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            width: 640px;
            border-collapse: collapse;
            border-spacing: 0;
        }


        th {
            background-color: #1ABC9C;
            color: white;
            text-align: left;
            font-size: 20px;
        }

        td, th { border: 1px solid white; }

        tr:nth-child(even) {background-color: transparent}

        td {

            padding: 12px 15px;
            color: white;
           font-weight: bold;
            font-size: 20px;
        }
        tbody{

            border-bottom: 1px solid #dddddd;

        }

    </style>
    </head>
    <body>

    <table style="margin-left: 220px;">
        <tbody>
        <tr>
            <th  style="text-align: center; width: 50px;">ID</th>
            <th style="text-align: center;width: 150px;">Timestamp&nbsp;</th>
            <th style="text-align: center; width: 50px;">Block&nbsp;</th>
            <th style="text-align: center; width: 100px;">Proof</th>
            <th style="text-align: center; width: 350px;">PreviousHash</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "healthdb");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "select ID,Timestamp,Block,Proof, PreviousHash from blockchain";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
// output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
<td style='font-size: 15px;'>" . $row["ID"]. "</td>
<td style='font-size: 15px;'>" . $row["Timestamp"]. "</td>
<td style='font-size: 15px;'>" . $row["Block"]. "</td>
<td style='font-size: 15px; word-break: break-all;'>" . $row["Proof"] . "</td>
<td style='font-size: 15px;  word-break: break-all;'>"
                    . $row["PreviousHash"]. "</td>
</tr>";
            }
            echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
        </tbody>
    </table>


</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.5.0/sha256.min.js'></script><script  src="./script.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br>

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
