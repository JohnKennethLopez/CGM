<?php
session_start();
include('cgmdbconnection.php');

// Set your timezone
date_default_timezone_set('Asia/Manila');

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

$chapter = $_GET['chapter'];

for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $query = "SELECT date, count(*) AS total FROM appointment WHERE date = '$today' AND cgm_id = '$chapter' AND status = 'Confirmed'";
        $query_run = mysqli_query($con, $query);
        $date_count = mysqli_num_rows($query_run);
        $row = mysqli_fetch_array($query_run);

        $total = $row['total'];

        if($total === '5'){
                $week .= '<td class="today">' . $day. '<br><button type="button" class="btn btn-danger" disabled>Fully Booked</button>';
        } else {
            $week .= '<td class="today">' . $day. '<br><button type="button" name="book" class="btn btn-info" data-toggle="modal" data-target="#my-modal"><a href="?chapter=' . $chapter . '&date=' . $date . '#myModal">Book</a></button>';}
    } 
    
    else{
        $query = "SELECT date, count(*) AS total FROM appointment WHERE date = '$date' AND cgm_id = '$chapter' AND status = 'Confirmed'";
        $query_run = mysqli_query($con, $query);
        $date_count = mysqli_num_rows($query_run);
        $row = mysqli_fetch_array($query_run);

        $total = $row['total'];

            if($total === '5'){
                    $week .= '<td>' . $day. '<br><button type="button" class="btn btn-danger" disabled>Fully Booked</button>';
            } else {
                $week .= '<td>' . $day. '<br><button type="button" name="book" class="btn btn-info" data-toggle="modal" data-target="#my-modal"><a href="?chapter=' . $chapter . '&date=' . $date . '#myModal">Book</a></button>';}
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
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>

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
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
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
            width: 100px;
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
        a {
            text-decoration: none;
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
                <div class="row">
                    <div class="col">
                        <h3 style="margin: auto; text-align: center;"><?php $chapter = $_GET['chapter'];
                         $name = "SELECT * FROM chapter WHERE id = $chapter";
                        $name_run = mysqli_query($con, $name);
                        $row = mysqli_fetch_array($name_run);
                        echo $row['cgmchapter'] ?></h3>
                    </div>

                    <div class="col">
                        <h3 style="margin-left: 20px;"><a href="?ym=<?php echo $prev; ?>&chapter=<?php echo $chapter; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>&chapter=<?php echo $chapter; ?>">&gt;</a></h3>
                    </div>
                    
                </div>
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

        <div class="modal fade" tabindex="-1" role="dialog" id="my-modal">
   <div class="modal-dialog" role="document" style="z-index: 35500;">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Appointment Form</h4>
         </div>
         <div class="modal-body">
            <form method="post" action="sendemail.php">
            <input name="chapter" hidden value="<?php echo $_GET['chapter'] ?>">
                <div class="INP">
                    <label for="date">Date:</label>
                    <input type="text" class="date" name="date" readonly  value="<?php 
                        $getdate = $_GET['date'];
                        echo $getdate;
                    ?>">
                </div>
                <div class="INP">
                            <label for="time">Time:</label>
                            <select required class="form-control" name="time" id="ser">
                                <option value="" disabled selected>Select Time</option>
                                <option value="9:00 AM - 10:00 AM" 
                                
                                <?php
                                $chapter = $_GET['chapter'];
                                $getdate = $_GET['date'];
                                $checktime = "SELECT * FROM appointment WHERE date = '$getdate' AND cgm_id = '$chapter' AND time = '9:00 AM - 10:00 AM' AND status = 'Confirmed'";
                                $checktime_run = mysqli_query($con, $checktime);
                                $row = mysqli_num_rows($checktime_run);
                                // $total = $row['total'];
                                if($row === 1) {?> hidden <?php } ?>
                                >9:00 AM - 10:00 AM</option>]


                                <option value="11:00 AM - 12:00 PM"
                                <?php
                                $chapter = $_GET['chapter'];
                                $getdate = $_GET['date'];
                                $checktime = "SELECT * FROM appointment WHERE date = '$getdate' AND cgm_id = '$chapter' AND time = '11:00 AM - 12:00 PM' AND status = 'Confirmed'";
                                $checktime_run = mysqli_query($con, $checktime);
                                $row = mysqli_num_rows($checktime_run);
                                // $total = $row['total'];
                                if($row === 1) {?> hidden <?php } ?>
                                >11:00 AM - 12:00 PM</option>


                                <option value="1:00 PM - 2:00 PM"
                                <?php
                                $chapter = $_GET['chapter'];
                                $getdate = $_GET['date'];
                                $checktime = "SELECT * FROM appointment WHERE date = '$getdate' AND cgm_id = '$chapter' AND time = '1:00 PM - 2:00 PM' AND status = 'Confirmed'";
                                $checktime_run = mysqli_query($con, $checktime);
                                $row = mysqli_num_rows($checktime_run);
                                // $total = $row['total'];
                                if($row === 1) {?> hidden <?php } ?>
                                >1:00 PM - 2:00 PM</option>

                                <option value="2:00 PM - 3:00 PM"
                                <?php
                                $chapter = $_GET['chapter'];
                                $getdate = $_GET['date'];
                                $checktime = "SELECT * FROM appointment WHERE date = '$getdate' AND cgm_id = '$chapter' AND time = '2:00 PM - 3:00 PM' AND status = 'Confirmed'";
                                $checktime_run = mysqli_query($con, $checktime);
                                $row = mysqli_num_rows($checktime_run);
                                // $total = $row['total'];
                                if($row === 1) {?> hidden <?php } ?>
                                >2:00 PM - 3:00 PM</option>

                                <option value="4:00 PM - 5:00 PM"
                                <?php
                                $chapter = $_GET['chapter'];
                                $getdate = $_GET['date'];
                                $checktime = "SELECT * FROM appointment WHERE date = '$getdate' AND cgm_id = '$chapter' AND time = '4:00 PM - 5:00 PM' AND status = 'Confirmed'";
                                $checktime_run = mysqli_query($con, $checktime);
                                $row = mysqli_num_rows($checktime_run);
                                // $total = $row['total'];
                                if($row === 1) {?> hidden <?php } ?>
                                >4:00 PM - 5:00 PM</option>

                            </select>
                        </div>
                        <div class="INP">
                            <label for="fullname">Full Name:</label>
                            <input type="text" name="fullname" class="fullname" placeholder="Enter your Name" required>
                        </div>
                        <div class="INP">
                            <label for="email">Email:</label>
                            <input type="email" class="email" name="email" placeholder="Enter your Email" required>
                        </div>
                        <div class="INP">
                            <label for="contact">Contact Number:</label>
                            <input type="text" class="contact" name="contact" placeholder="Enter your Contact Number" required>
                        </div>
                        
                        <div class="INP">
                            <label for="address">Address:</label>
                            <input type="text" class="address" name="address" placeholder="Enter your Address" required>
                        </div>
                        <div class="INP">
                            <label for="service">Subject/Topic to discuss (Service):</label>
                            <select required class="service" name="service" id="ser">
                                <option value="" disabled selected>Select Service</option>
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
                            <label for="message">Add Message:</label>
                            <textarea name="message" placeholder="Add Message"></textarea>
                        </div> 

                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit" name="sendappoint">SEND</button>
            </form>
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