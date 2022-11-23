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
    <link rel="stylesheet" href="css/attend.css">
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
                            <p class="btn"><a href="uploadevent.php#upload">Upload Events</a></p>
                            <p class="btn"><a href="appointment.php#Appointment">View Appointment</a><p>
                            <p class="btn"><a href="viewprayer.php#prayerReq">View Prayer Requests</a><p>
                            <p class="btn"><a href="">Attendance</a><p>
                            <p class="btn"><a href="attendancelist.php#Attendancelist">View Attendance List</a><p>
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
                    <div class="details">
                        <div class="inputform">
                            <label for="church">CGM Chapter</label>
                            <select name="cgmchapter" id="church" required>
                                <option value="select" disabled selected required>Select CGM Church</option>
                                    <option value="CGM Las Piñas Main">CGM Las Piñas Main</option>
                                    <option value="CGM Bacoor, Cavite">CGM Bacoor, Cavite</option>
                                    <option value="CGM Balete, Batangas">CGM Balete, Batangas</option>
                                    <option value="CGM Bustos, Bulacan">CGM Bustos, Bulacan</option>
                                    <option value="CGM Cabuyao, Laguna">CGM Cabuyao, Laguna</option>
                                    <option value="CGM Candaba, Pampanga">CGM Candaba, Pampanga</option>
                                    <option value="CGM EDSA Mandaluyong">CGM EDSA Mandaluyong</option>
                                    <option value="CGM Gattaran, Cagayan">CGM Gattaran, Cagayan</option>
                                    <option value="CGM Hinigaran, Negros">CGM Hinigaran, Negros</option>
                                    <option value="CGM Mabini, Tanauan">CGM Mabini, Tanauan</option>
                                    <option value="CGM Mariveles, Bataan">CGM Mariveles, Bataan</option>
                                    <option value="CGM Nasugbo, Batangas">CGM Nasugbo, Batangas</option>
                                    <option value="CGM Navotas City">CGM Navotas City</option>
                                    <option value="CGM Prieto Diaz, Sorsogon">CGM Prieto Diaz Sorsogon</option>
                                    <option value="CGM Pulilan, Bulacan">CGM Pulilan, Bulacan</option>
                                    <option value="CGM Sampaloc, Quezon">CGM Sampaloc, Quezon</option>
                                    <option value="CGM San Pedro, Laguna">CGM San Pedro, Laguna</option>
                                    <option value="CGM Sta. Rosa, Laguna">CGM Sta. Rosa, Laguna</option>
                                    <option value="CGM Taguig City">CGM Taguig City</option>
                                    <option value="CGM Gen. Tinio, Nueva Ecija">CGM Tinio, Nueva Ecija</option>
                            </select>
                        </div>
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