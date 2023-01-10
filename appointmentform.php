<?php
session_start();
include('cgmdbconnection.php');

// Set your timezone
date_default_timezone_set('Asia/Tokyo');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today
$today = date('Y-m-j', time());

// For H3 title
$html_title = date('F', $timestamp);

// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
// You can also use strtotime!
// $prev = date('Y-m', strtotime('-1 month', $timestamp));
// $next = date('Y-m', strtotime('+1 month', $timestamp));

// Number of days in the month
$day_count = date('t', $timestamp);
 
// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
//$str = date('w', $timestamp);


// Create Calendar!!
$weeks = array();
$week = '';

// Add empty cell
$week .= str_repeat('<td></td>', $str);

for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Prepare for new week
        $week = '';
    }

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="JavaScript/menu.js" defer></script>
        <script src="JavaScript/nav.js" defer></script>
        <script src="JavaScript/scroll.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <style>
        .container {
            font-family: 'Orbitron', sans-serif;
            margin-top: 80px;
        }
        h3 {
            margin-bottom: 30px;
            color: white;
        }
        th {
            height: 30px;
            text-align: center;
        }
        td {
            height: 100px;
        }
        .today {
            background: orange;
        }
        th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: blue;
        }
    </style>
    
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
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li><a href="MisSer.php">Missions & Services</a></li>
                <li><a href="Give.php">Give</a></li>
            </ul>
            </div>
            <h1 class="appoint">Set an Appointment Reservation</h1>
            
            <div class="container" style="margin-top: -10px;">
        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <table class="table table-bordered">
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>

        </section>

        
          
            <div id="app-modal">
                <div class="modal">
                    <div class="top-form">
                        
                        <div class="app-form">
                <div class="PinLabas">
                <div class="close-modal">
                        <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="labas">
                    <form action="sendemail.php" method="POST">
                    <h1 class="h1form">APPOINTMENT FORM</h1>
                    <div class="loob">
                        <div class="INP">
                            <label for="date">Date:</label>
                            <input type="date" name="date" readonly  value="<?php echo date('Y-m-d',strtotime($date)); ?>">
                        </div>
                        <div class="INP">
                            <label for="time">Time:</label>
                            <input type="text" name="time" id="timeslot" readonly required>
                        </div>
                        <div class="INP">
                            <label for="fullname">Full Name:</label>
                            <input type="text" name="fullname" placeholder="Enter your Name" required>
                        </div>
                        <div class="INP">
                            <label for="email">Email:</label>
                            <input type="email" name="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="INP">
                            <label for="contact">Contact Number:</label>
                            <input type="text" name="contact" placeholder="Enter your Contact Number" required>
                        </div>
                        
                        <div class="INP">
                            <label for="address">Address:</label>
                            <input type="text" name="address" placeholder="Enter your Address" required>
                        </div>
                        <div class="INP">
                            <label for="service">Subject/Topic to discuss (Service):</label>
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
                            <p class="note">Note: If you select "Other", Please specify in the Message box what is your agenda.</p>
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
                                    <option value="CGM Nasugbo, Batangas">12. CGM Nasugbu, Batangas</option>
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
                            <input type="text" name="room_id" placeholder="Enter the Number of the chapter">
                            <p class="note">Note: There is a number in the Selection of CGM Chapter, Please Enter the correct CGM chapter Number</p>
                        </div>
                        
                    </div>
                    <button class="" type="submit" name="sendappoint" id="send">Send Appointment</button>
                    <!--<button><a href='?date=".$date."#form' >CLOSE</a></button>-->
                </form>
                </div>
            </div>
                        </div>
                    </div>
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
        
        <script>
            $(".time-btn").click(function(){
                var timeslot=$(this).attr('data-timeslot');
                $("#timeslot").val(timeslot);
            })
            
        </script>
        <script>
            $(function(){
                $('.time-btn').click(function(){
                    $('#app-modal').fadeIn().css("display", "flex");
                });
                $('.close-modal').click(function(){
                    $('#app-modal').fadeOut();
                });
            });
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