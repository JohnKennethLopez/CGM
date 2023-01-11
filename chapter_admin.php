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
                            <?php
                            $cgm_id = $_GET['chapter'];
                            $level = "SELECT * FROM admin WHERE cgm_id = '$cgm_id'";
                            $level_run = mysqli_query($con, $level);
                            $row = mysqli_fetch_array($level_run);
                            $chapter = $row['cgm_id'];
                            
                            ?>
                            <p class="btn"><a href="uploadevent.php#upload?chapter=<?php echo $chapter ?>">Upload Events</a></p>
                            <p class="btn"><a href="appointment.php#Appointment?chapter=<?php echo $chapter ?>">View Appointment</a><p>
                            <p class="btn"><a href="viewprayer.php#prayerReq?chapter=<?php echo $chapter ?>">View Prayer Requests</a><p>
                            <p class="btn"><a href="attendance.php#attendance?chapter=<?php echo $chapter ?>">Attendance</a><p>
                            <p class="btn"><a href="attendancelist.php#Attendancelist?chapter=<?php echo $chapter ?>">View Attendance List</a><p>
                        </div>
                    </div>
            </div>
        </div>
        <button class="logout"><a href="logout.php">Logout</a></button>
    </section>
</body>
</html>