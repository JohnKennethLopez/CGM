<?php
session_start();
include('cgmdbconnection.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGM</title>
    <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
    <link rel="stylesheet" href="css/admin2.css">
    
</head>
<body>
    <section id="admin">
        <div class="dashb">
            <div class="adlogo">
                <h1 class="CGMh1"><img class="logo" src="logo.png" alt=""><br>CHURCH<br>OF GOD'S <br>MIRACLES<br></h1>
            </div>
            <div class="addash">
                    <br><h1 class="cgmadmin"><?php $chapter = $_GET['chapter'];
                         $name = "SELECT * FROM chapter WHERE id = $chapter";
                        $name_run = mysqli_query($con, $name);
                        $row = mysqli_fetch_array($name_run);
                        echo $row['cgmchapter'] ?> ADMIN</h1><br><br>
                    <div class="inner">
                        <div class="dashnav">

                            <p class="btn"><a href="uploadevent.php?chapter=<?php echo $chapter ?>#upload">Upload Events</a></p>
                            <p class="btn"><a href="appointment.php?chapter=<?php echo $chapter ?>#Appointment">View Appointment</a><p>
                            <p class="btn"><a href="viewprayer.php?chapter=<?php echo $chapter ?>#prayerReq">View Prayer Requests</a><p>
                            <p class="btn"><a href="attendancelist.php?chapter=<?php echo $chapter ?>#Attendancelist">View Attendance List</a><p>
                        </div>
                    </div>
            </div>
        </div>
        <button class="logout"><a href="logout.php">Logout</a></button>
    </section>
</body>
</html>