<?php
session_start();
include('cgmdbconnection.php');
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
    <link rel="stylesheet" href="css/attendlist.css">
</head>
<body>
    <section id="admin">
        <div class="dashb">
            <div class="adlogo">
                <h1 class="CGMh1"><img class="logo" src="logo.png" alt=""><br>CHURCH<br>OF GOD'S <br>MIRACLES<br></h1>
            </div>
            <div class="addash">
            <h1 class="cgmadmin">CGM ADMIN</h1><br><br>
                    <div class="inner">
                        <div class="dashnav">
                        <p class="btn"><a href="appointment_admin.php#Appointment">View Appointment</a><p>
                        <p class="btn"><a href="viewprayer_admin.php#prayerReq">View Prayer Requests</a><p>
                            <p class="btn"><a href="attendancelist_admin.php#Attendancelist">View Attendance List</a><p>
                        </div>
                    </div>
            </div>
        </div>
        <button class="logout"><a href="logout.php">Logout</a></button>
                <hr />
                <h1 class="list">Attendance List</h1>
    </section>
    <section id="Attendancelist">
        <div class="labas">
            <div class="filter">
                <div class="inn">
                    <p class="backbtn"><a href="search_admin.php">Filter the Date and <br>CGM CHAPTER</a></p>
                </div>
            </div>
            <div class="print">
                <div class="pr">
                    <p class="printbtn"><a href="printattend.php">Print<br>Attendance List</a></p>
                </div>
            </div>
        </div>
        
        
        <div class="table">
            <table class="tablecont">
                <thead>
                    <th>CGM CHAPTER</th>
                    <th>DATE</th>
                    <th>FULL NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>CONTACT NUMBER</th>
                    <th>ADDRESS</th>
                    <!--<th class="DE">DELETE & EDIT</th>-->
                </thead>
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    

                    $query = "SELECT * FROM attendance";
                    $query_run = mysqli_query($con,$query);
                    $check_attendance = mysqli_num_rows($query_run) > 0; 
                    if($check_attendance){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr class="scroll">
                        <td><?php echo $row['cgmchapter']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['fullname']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['contactnumber']?></td>
                        <td><?php echo $row['address']?></td>
                    </tr>
                    
                    
                    <?php
                        }
                        } else{
                            echo " No Attendee Found!";
                        }
                    

                ?>
            </table>
        </div>
            <?php 
                $count_query = $count_query = mysqli_query($con, "SELECT COUNT(*) AS total FROM attendance");
                $row_count = mysqli_fetch_assoc($count_query);
                $count = $row_count['total'];
            ?>
            <div class="totalattend">
                <h1 class="total">Total of Attendees: <?php echo $count; ?></h1>
            </div>
    </section>
</body>
</html>