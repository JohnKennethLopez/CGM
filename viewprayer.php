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
    <link rel="stylesheet" href="css/viewprayerreq.css">
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
                <h1 class="prayer">Prayer Requests &<br> Answered Prayers</h1>
    </section>
    <section id="prayerReq">
        <div class="table">
            <table class="tablecont">
                <tr>
                    <th>CGM CHAPTER</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PRAY REQUESTS</th>
                    <th>ANSWERED PRAYERS</th>
                    <th class="DE">DELETE & EDIT</th>
                </tr>
                <?php
                    $con = new mysqli('localhost','root','','cgm');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM prayer";
                    $query_run = mysqli_query($con,$query);
                    $check_pray = mysqli_num_rows($query_run) > 0; 
                    if($check_pray){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr>
                        <td><?php echo $row['cgmchapter']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['request']?></td>
                        <td><?php echo $row['report']?></td>
                        <td><button class="edit">edit</button><a href="pray_delete.php?delete=<?php echo $row['id']; ?>"><button class="del">delete</button></a></td>
                        
                    </tr>
                    <?php
                        }
                        } else{
                            echo " No Prayer Request & Prayer Reports Found!";
                        }
                    

                ?>
            </table>
        </div>
    </section>
</body>
</html>
<?php
if(isset($_POST['delete_btn_set']))
{
    $del_id = $_POST['delete_id'];

    $query = "DELETE FROM pray WHERE id='$del_id'";
    $query_run = mysqli_query($connect, $query);
}
?>
