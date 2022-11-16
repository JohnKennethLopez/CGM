<?php
session_start();

?>

<?php
    function build_calendar($month,$year, $room){
        include('cgmdbconnection.php');

        //CGM Las Pinas Main
        $query = $con->prepare("SELECT * FROM chapter");
        $rooms ="";
        $first_room=0;
        $i=0;
        if($query->execute()){
            $result = $query->get_result();
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    if($i==0){
                        $first_room = $row['id'];
                    }
                    $rooms.= "<option value='".$row['id']."'>".$row['cgmchapter']."</option>";
                    $i++;
                }
                $query->close();
            }
        }

        if($room!=0){
            $first_room = $room;
        }

        $query = $con->prepare("SELECT * FROM appointment WHERE month(date)=? AND year(date)=? AND room_id=?");
        $query -> bind_param('ssi',$month, $year, $first_room);
        $bookings = array();
        if($query->execute()){
            $result = $query->get_result();
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $bookings[] = $row['date'];
                }
                $query->close();
            }
        }

        $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
        $numberDays = date('t',$firstDayOfMonth);
        $dateComponents = getdate($firstDayOfMonth);
        $monthName = $dateComponents['month'];
        $dayOfWeek = $dateComponents['wday'];
        $dateToday = date('Y-m-d');

        $calendar = "<table class='table'>";
        $calendar.= "<center><h2 class='Hcalendar'>$monthName $year</h2>";
        
        $calendar.= "<a class='prebtn' href='?month=".date('m', mktime(0,0,0,$month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a>";
        
        $calendar.= "<a class='curbtn' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a>";

        $calendar.= "<a class='nxtbtn' href='?month=".date('m', mktime(0,0,0,$month+1, 1, $year)).".&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center>";
        $calendar.= "
                    <form id='room_select_form'>
                        <div class='roww'>
                            <label class='labelchap'>Select CGM Chapter</label><br>
                                <select class='form-control' id='room_select' name='room'>
                                    ".$rooms."
                                </select>
                                <input type='hidden' name='month' value='".$month."'>
                                <input type='hidden' name='year' value='".$year."'>
                        </div>
                    </form>
        ";
        $calendar.= "<tr>";

        foreach($daysOfWeek as $day){
            $calendar.= "<th class='header'>$day</th>";
        }

        $calendar.= "</tr><tr>";

        if($dayOfWeek > 0 ){
            for($k=0;$k<$dayOfWeek;$k++){
                $calendar.= "<td></td>";
            }
        }
        $currentDay=1;
        $month = str_pad($month,2,"0",STR_PAD_LEFT);

        while($currentDay<=$numberDays){

            if($dayOfWeek==7){
                $dayOfWeek = 0;
                $calendar.= "</tr><tr>";
            }

            $currentDayRel =str_pad($currentDay,2,"0",STR_PAD_LEFT);
            $date = "$year-$month-$currentDayRel";
            
            $dayname = strtolower(date('l',strtotime($date)));
            $eventNum = 0;
            $today = $date==date('Y-m-d')?"today":"";
            if(in_array($date, $bookings)){
                $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='NAbtn'>Booked</button>";
            }elseif($date<date('Y-m-d')){
                $calendar.="<td><h4>$currentDay</h4> <button class='NAbtn'>N/A</button>";
            }else{
                $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='?date=".$date."' class='btnBook'>Book</a>";
            }

            $calendar.= "</td>";

            $currentDay++;
            $dayOfWeek++;

        }
        if($dayOfWeek != 7){
            $remainingDays = 7-$dayOfWeek;
            for($i = 0; $i < $remainingDays;$i++){
                $calendar.= "<td></td>";
            }
        }
        $calendar.= "</tr>";
        $calendar.= "</table>";

        echo $calendar;

    }
?>

<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/appointForm.css">
        <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
        <script src="JavaScript/menu.js" defer></script>
        <script src="JavaScript/nav.js" defer></script>
        <script src="JavaScript/scroll.js" defer></script>
    </head>
    <body>
        <section id="bg-image">
            <div class="homelg">
                <a href="index.php"><img class="lg" src="logo.png" alt=""></a>
            </div>
            <div class="menu">
                <div class="bur"></div>
            </div>
            <div class="nav" data-visible="false">
                <h1 class="logo"><a href="index.php"><img class="logoimg" src="logo.png" alt="">Church of God's<br> Miracles</a></h1>
            <ul>
                <li><a href="about.php" class="text-white">About</a></li>
                <li><a href="findchurch.php">Find a Church</a></li>
                <li><a href="CounMin.html">Council & Ministries</a></li>
                <li><a href="program.html">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li><a href="MisSer.html">Missions & Services</a></li>
                <li><a href="Give.html">Give</a></li>
            </ul>
            </div>
            <h1 class="appoint">Set an Appointment Reservation</h1>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $dateComponents = getdate();
                                if(isset($_GET['month']) && isset($_GET['year'])){
                                $month = $_GET['month']; 			     
                                $year = $_GET['year'];
                                 }else{
                                $month = $dateComponents['mon']; 			     
                                $year = $dateComponents['year'];
                                }

                                if(isset($_GET['room'])){
                                    $room = $_GET['room'];
                                }else{
                                    $room = 0;
                                }
                            echo build_calendar($month, $year, $room);
                        ?>
                    </div>
                </div>
            </div>

        </section>
            <?php
                if(isset($_GET['date'])){
                    $date = $_GET['date'];
                }
                
            ?>
        <section id="form">
            <div class="PinLabas">
                
                <div class="labas">
                    <form action="appointmentForm_insert.php" method="POST">
                    <h1 class="h1form">APPOINTMENT FORM</h1>
                    <div class="loob">
                        <div class="INP">
                            <label for="date">Date:</label>
                            <input type="date" name="date" readonly  value="<?php echo date('Y-m-d',strtotime($date)); ?>">
                        </div>
                        <div class="INP">
                            <label for="fullname">Full Name:</label>
                            <input type="text" name="fullname" placeholder="Enter your Name" required>
                        </div>
                        <div class="INP">
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="INP">
                            <label for="contact">Contact Number:</label>
                            <input type="text" name="contact" placeholder="Enter your Contact Number" required>
                        </div>
                        <div class="INP">
                            <label for="time">Time:</label>
                            <input type="text" name="time" placeholder="Enter the Time(0:00am/pm)" required>
                        </div>
                        <div class="INP">
                            <label for="address">Address:</label>
                            <input type="text" name="address" placeholder="Enter your Address" required>
                        </div>
                        <div class="INP">
                            <label for="service">Service:</label>
                            <select name="service" id="ser" required>
                                <option value="select" disabled selected>Select Service</option>
                                <option value="wedding">Wedding</option>
                                <option value="Child dedication">Child Dedication</option>
                                <option value="House blessing">House Blessing</option>
                                <option value="Business blessing">Business Blessing</option>
                                <option value="Car blessing">Car Blessing</option>
                                <option value="Water baptism">Water Baptism</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="INP">
                            <label for="church">CGM Chapter:</label>
                                <select name="cgmchapter" id="church" required>
                                    <option value="select" disabled selected>Select CGM Church</option>
                                    <option value="CGM Las Piñas Main">1. CGM Las Piñas Main</option>
                                    <option value="CGM Bacoor, Cavite">2. CGM Bacoor, Cavite</option>
                                    <option value="CGM Balete, Batangas">3. CGM Balete, Batangas</option>
                                    <option value="CGM Bustos, Bulacan">4. CGM Bustos, Bulacan</option>
                                    <option value="CGM Cabuyao, Laguna">5. CGM Cabuyao, Laguna</option>
                                    <option value="CGM Candaba, Pampanga">6. CGM Candaba, Pampanga</option>
                                    <option value="CGM EDSA Mandaluyong">7. CGM EDSA Mandaluyong</option>
                                    <option value="CGM Gattaran, Cagayan">8. CGM Gattaran, Cagayan</option>
                                    <option value="CGM Hinigaran, Negros">9. CGM Hinigaran, Negros</option>
                                    <option value="CGM Mabini, Tanauan">10. CGM Mabini, Tanauan</option>
                                    <option value="CGM Mariveles, Bataan">11. CGM Mariveles, Bataan</option>
                                    <option value="CGM Nasugbo, Batangas">12. CGM Nasugbo, Batangas</option>
                                    <option value="CGM Navotas City">13. CGM Navotas City</option>
                                    <option value="CGM Prieto Diaz, Sorsogon">14. CGM Prieto Diaz Sorsogon</option>
                                    <option value="CGM Pulilan, Bulacan">15. CGM Pulilan, Bulacan</option>
                                    <option value="CGM Sampaloc, Quezon">16. CGM Sampaloc, Quezon</option>
                                    <option value="CGM San Pedro, Laguna">17. CGM San Pedro, Laguna</option>
                                    <option value="CGM Sta. Rosa, Laguna">18. CGM Sta. Rosa, Laguna</option>
                                    <option value="CGM Taguig City">19. CGM Taguig City</option>
                                    <option value="CGM Gen. Tinio, Nueva Ecija">20. CGM Tinio, Nueva Ecija</option>
                                </select>
                        </div>
                        <div class="INP">
                            <label for="message">Add Message:</label>
                            <textarea name="message" placeholder="Add Message"></textarea>
                        </div>
                        <div class="INP">
                            <label for="room_id">CGM chapter Number:</label>
                            <input type="room" name="room_id"  placeholder="Enter the Number of the chapter">
                        </div> 
                    </div>
                    <input type="submit" name="sendappoint" id="send" value="SEND APPOINTMENT">
                </form>
                </div>
            </div>
        </section>

        <section id="footer">
            <div class="foot1">
                <h1 class="update">To keep updated<br>Follow us on:</h1>
                    <div class="socmed">
                            <div class="fbyt">
                                <a href="https://www.facebook.com/CGMMain"><img class="footimg" src="css/image/fb.png"><p>Church of God's Miracles - Las Piñas Main</p></a>
                                <a href="https://www.youtube.com/channel/UCmrFWaixqTWQLfHWfuEJcYA/featured"><img class="footimg" src="css/image/yt.png"><p>Church of God's Miracles OFFICIAL</p></a>
                    </div>
                </div>
            </div>
            <div class="foot2">
                <div class="copyright">
                    <a href="#bg-image">© Copyright 2022 Church of God's Miracles</a>
                </div>
            </div>
        </section>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script>
            $("#room_select").change(function(){
                $("#room_select_form").submit();
            });

            $("#room_select option[value='<?php echo $room; ?>']").attr('selected','selected');
        </script>
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