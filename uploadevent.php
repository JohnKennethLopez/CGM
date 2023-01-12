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
    <link rel="stylesheet" href="css/upevent.css">
    <script src="JavaScript/upload.js" defer></script>
    <script src="JavaScript/announcepic.js" defer></script>
</head>
<body>
    <section id="admin">
        <div class="dashb">
            <div class="adlogo">
                <h1 class="CGMh1"><img class="logo" src="logo.png" alt=""><br>CHURCH<br>OF GOD'S <br>MIRACLES<br></h1>
            </div>
            <div class="addash">
            <br><h1 class="cgmadmin"><?php 
                        $chapter = $_GET['chapter'];
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
                <h1 class="uplaodevent">Upload Events</h1>
    </section>
    <section id="upload">
        <div class="pinakalabas">
            <div class="labas">
                <form action="upcoming.php" method="POST" enctype="multipart/form-data">
                    <h1 class="h1up">UPCOMING EVENT</h1>
                    <input name="chapter" hidden value="<?php echo $_GET['chapter'] ?>">
                <div class="loob">
                    <div class="iisang">
                        <div class="container">
                            <div class="wrapper">
                                <div class="upimg">
                                    <img id="uploadimage" src="" alt="">
                                </div>
                                <div class="content">
                                    <div class="icon">
                                        <img src="css/image/photo.png" alt="" width="60px">
                                    </div>
                                    <div class="nofile">
                                        <p>Add Photo</p>
                                    </div>
                                </div>
                                <div id="cancel">
                                    <img src="css/image/cancel.png" alt="" width="15px">
                                </div>
                                <div class="file-name">
                                    <p>File Name Here</p>
                                </div>
                            </div>
                            <input id="intBTN" type="file" name="image" hidden required>
                            <p onclick="defaultbtnactive()" id="custom-btn">Choose a File</p>
                            
                        </div>
                    </div>
                    <div class="isang">
                        <label for="title">Event Title:</label>
                        <input type="text" name="title" placeholder="Enter the Event Title" required>
                    </div>
                    <div class="isang">
                        <label for="loc">Add Location:</label>
                        <input type="text" name="loc" placeholder="Add Location">
                    </div>
                    <div class="isang">
                        <label for="date">Insert Date:</label>
                        <input type="date" name="date">
                    </div>
                    <div class="isang">
                        <label for="time">Insert Time:</label>
                        <input type="time" name="time">
                    </div>
                    <div class="isang">
                        <label for="des">Add Description:</label>
                        <textarea name="des" id="descrip" placeholder="Add Description"></textarea>
                    </div>
                        <input type="submit" name="submitevent" id="send" value="POST">
                </div>
                </form>
            </div>
                <div class="edit">
                    <div class="uplAnnounce">
                        <div class="inside">
                            <p class="editbtn"><a href="uploadannouncement.php">Upload an ANNOUNCEMENT</a></p>
                        </div>
                    </div>
                    <div class="editevent">
                        <div class="inside">
                            <p class="editbtn"><a href="editEvent.php">Edit Posted<br>Events</a></p>
                        </div>
                    </div>
                    <div class="homepic">
                        <div class="inside">
                            <p class="editbtn"><a href="editHomePic.php">Edit Home pages Pictures</a></p>
                        </div>
                    </div>
                    <div class="editann">
                        <div class="inside">
                            <p class="editbtn"><a href="editAnnounce.php">Edit Posted Announcement</a></p>
                        </div>
                    </div>
                    <div class="editabout">
                        <div class="inside">
                            <p class="editbtn"><a href="editAbout.php">Edit<br>About</a></p>
                        </div>
                    </div>
                    <div class="editgmap">
                        <div class="inside">
                            <p class="editbtn"><a href="editGmap.php">Edit Google<br>Map</a></p>
                        </div>
                    </div>
                    <div class="editCM">
                        <div class="inside">
                            <p class="editbtn"><a href="editCM.php">Edit Councile & Ministry</a></p>
                        </div>
                    </div>
                    <div class="editprog">
                        <div class="inside">
                            <p class="editbtn"><a href="editprog.php">Edit Live stream<br>Iframe</a></p>
                        </div>
                    </div>
                    <div class="editmisser">
                        <div class="inside">
                            <p class="editbtn"><a href="editmisser.php">Edit<br>Mission & Service</a></p>
                        </div>
                    </div>
                    <div class="editgive">
                        <div class="inside">
                            <p class="editbtn"><a href="editgive.php">Edit Give<br>Information</a></p>
                        </div>
                    </div>
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