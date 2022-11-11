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
                <h1 class="uplaodevent">Upload Events</h1>
    </section>
    <section id="upload">
        <div class="pinakalabas">
            <div class="labas">
                <form action="upcoming.php" method="POST" enctype="multipart/form-data">
                    <h1 class="h1up">UPCOMING EVENT:</h1>
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
                            <p class="editbtn"><a href="editEvent.php">Edit Posted Events</a></p>
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