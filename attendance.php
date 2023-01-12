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
    <link rel="stylesheet" href="css/attend.css">
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
                            <p class="btn"><a href="attendance.php?chapter=<?php echo $chapter ?>#attendance">Attendance</a><p>
                            <p class="btn"><a href="attendancelist.php?chapter=<?php echo $chapter ?>#Attendancelist">View Attendance List</a><p>
                        </div>
                    </div>
            </div>
        </div>
        <button class="logout"><a href="logout.php">Logout</a></button>
                <hr />
                <h1 class="attend">Attendance</h1>
    </section>
    <section id="attendance">
        <div class="attendform">
            <form action="attend_insert.php" method="POST">
                <div class="formIN">
                        <h1 class="h1attend">ATTENDANCE FORM</h1>
                        <input name="chapter" hidden value="<?php echo $_GET['chapter'] ?>">

                    <div class="details">
                        <div class="inputform">
                            <label for="date">Date</label>
                            <input type="text" value="<?php echo date("Y/m/d") . "\n"?>" readonly id="date" name="date" placeholder="Choose the date" required>
                        </div>
                        <div class="inputform">
                            <label for="Full name">Name</label>
                            <input name="fullname" type="text" id="Full name" placeholder="Enter the Full name" required>
                        </div>
                        <div class="inputform">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" required>
                                <option value="select" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="inputform">
                            <label for="contact">Contact number</label>
                            <input name="contactnumber"  type="tel" id="contact" placeholder="Enter the contact number" required>
                        </div>
                        <div class="inputform">
                            <label for="age">Age</label>
                            <input name="age" type="number" id="age" placeholder="Enter age" required>
                        </div>
                        <div class="inputform">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" placeholder="Enter the Address"></textarea>
                            <p class="note">Note: All the information that will be input in this form is for contact purposes only</p>
                        </div>
                            <input type="submit" name="submitattend" id="send" value="Send">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status-code']; ?>",
            confirmButtonColor: "#020049",
            confirmButtonText: "Ok",

            });
    </script>
    <?php
    unset($_SESSION['status']);
}
?>