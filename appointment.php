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
        <div class="filter">
            <div class="inn">
                <p class="backbtn"><a href="searchappoint.php">Search a <br>CGM CHAPTER</a></p>
            </div>
        </div>
        <div class="table">
            <table class="tablecont">
                <tr>
                    <th>DATE</th>
                    <th>CGM CHAPTER</th>
                    <th>FULL NAME</th>
                    <th>EMAIL</th>
                    <th>CONTACT NUMBER</th>
                    <th>SERVICE</th>
                    <th>TIME</th>
                    <th>ADDRESS</th>
                    <th>MESSAGE</th>
                    <th class="DE">DELETE & EDIT</th>
                </tr>
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM appointment";
                    $query_run = mysqli_query($con,$query);
                    $check_attendance = mysqli_num_rows($query_run) > 0; 
                    if($check_attendance){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr class="scroll">
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['cgmchapter']?></td>
                        <td><?php echo $row['fullname']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['contact']?></td>
                        <td><?php echo $row['service']?></td>
                        <td><?php echo $row['time']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['message']?></td>
                        <td><button class="edit">edit</button><a href="#?delete=<?php echo $row['id']; ?>"><button class="del">delete</button></a></td>
                    </tr>
                    <?php
                        }
                        } else{
                            echo " No Appointment Reservation Found!";
                        }
                    

                ?>
            </table>
        </div>
    </section>
</body>
</html>