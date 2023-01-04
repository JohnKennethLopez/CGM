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
    <link rel="stylesheet" href="css/print.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <section id="Attendancelist">
        <div class="header">
            <div class="lgg"><img class="lg" src="logo.png" alt=""></div>
            <div class="cgmm"><h1 class="cgm">Church of God's Miracles</h1></div>
        </div>
    
        <div class="labas">
            <div class="print">
                <div class="inn">
                    <button onclick="window.print()" class="printbtn">PRINT  <i class="fa-solid fa-print"></i></button>
                    <button class="printbtn"><a href="admin2.php">BACK</a></button>
                </div>
            </div>
        </div>
            
        <div class="table">
            <div class="tablehead"><h1>Appointment List</h1></div>
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
                </tr>
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM appointment order by id desc";
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
                    </tr>
                    <?php
                        }
                        } else{
                            echo " No Appointment Reservation Found!";
                        }
                    

                ?>
            </table>
        </div>
        <?php 
                include('cgmdbconnection.php');

                $count_query = $count_query = mysqli_query($con, "SELECT COUNT(*) AS total FROM appointment");
                $row_count = mysqli_fetch_assoc($count_query);
                $count = $row_count['total'];
            ?>
            <div class="totalattend">
                <h1 class="total">Total of Appointment Reservations: <?php echo $count; ?></h1>
            </div>
    </section>
</body>
</html>