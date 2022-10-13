<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:admin.php");
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGM</title>
    <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
    <link rel="stylesheet" href="css/viewappointment.css">
</head>
<body>
    <section id="admin">
        <div class="dashb">
            <div class="adlogo">
                <h1 class="CGMh1"><img class="logo" src="logo.png" alt=""><br>CHURCH<br>OF GOD'S <br>MIRACLES<br></h1>
            </div>
            <div class="addash">
                    <br><h1 class="cgmadmin">CGM <br>ADMIN</h1><br><br>
                    <div class="inner">
                        <div class="dashnav">
                            <p class="btn"><a href="uploadevent.php">Upload Events</a></p>
                            <p class="btn"><a href="appointment.php">View Appointment</a><p>
                            <p class="btn"><a href="viewprayer.php">View Prayer Requests</a><p>
                            <p class="btn"><a href="attendance.php">Attendance</a><p>
                            <p class="btn"><a href="attendancelist.php">View Attendance List</a><p>
                        </div>
                    </div>
            </div>
        </div>
        <button class="logout"><a href="logout.php">Logout</a></button>
                <hr />
                <h1 class="appoint">Appointment Reservation</h1>
    </section>
    <section id="Appointment">
        <div class="table">
            <table class="tablecont">
                <tr>
                    <th>DATE</th>
                    <th>CGM CHAPTER</th>
                    <th>FULL NAME</th>
                    <th>CONTACT NUMBER</th>
                    <th>SERVICE</th>
                    <th>ADDRESS</th>
                    <th>MESSAGE</th>
                    <th class="DE">DELETE & EDIT</th>
                </tr>
                <tr>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                </tr>
                <tr>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                </tr>
                <tr>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                </tr>
            </table>
        </div>
    </section>
</body>
</html>