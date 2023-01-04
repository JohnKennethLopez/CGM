<?php
include('cgmdbconnection.php');
$dibconfig = mysqli_select_db($con,'cgm');

$qry = "SELECT * FROM upcoming WHERE date<=curdate ";
$qry_run = mysqli_query($con,$qry);
        while ($rows = mysqli_fetch_array($qry_run)) {

            $archive = "INSERT INTO event_archive (id, title, image, des, date, time, loc)
            VALUES ('$rows[id]', '$rows[title]', '$rows[image]', '$rows[des]', '$rows[date]', '$rows[time]', '$rows[loc]')";
            $archive_run = mysqli_query($con,$archive);

    $delete = "DELETE FROM upcoming WHERE date<=curdate";
    $delete_run = mysqli_query($con,$delete);
        
}
?>
<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/eve.css">
        <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
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
                <li><a href="about.php">About</a></li>
                <li><a href="findchurch.php">Find a Church</a></li>
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li><a href="program.php">Program</a></li>
                <li class="focus"><a href="">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li><a href="MisSer.php">Missions & Services</a></li>
                <li><a href="Give.php">Give</a></li>
            </ul>
            </div>
            <h1 class="evehead"> Church of God's Miracles<br> Event</h1>

            <div class="eventpic">
                <div class="upco">
                    <h1>EVENTS:</h1>
                </div>
                <div class="loob">
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM upcoming";
                    $query_run = mysqli_query($con,$query);
                    $check_upload = mysqli_num_rows($query_run) > 0; 
                    if($check_upload){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                        <div class="pic">
                        <img src="<?php echo $row['image']?>" alt="" width="300px">
                        <div class="info">
                            <h1><?php echo $row['title']?></h1><br>
                            <p class="des"><?php echo $row['des']?></p><br>
                            <p class="date"><?php echo $row['date']?></p><br>
                            <p class="time"><?php echo $row['time']?></p><br>
                            <p class="loc"><?php echo $row['loc']?></p>
                        </div>
                        </div>
                    <?php
                        }
                        } else{
                            echo "NO EVENT FOUND!!!";
                        }
                    

                ?>
                    
                                    
                </div>
            </div>
        </section>
        <section id="announcement">
                        <div class="announce">
                            <div class="anco">
                                    <h1>ANNOUNCEMENT:</h1>
                                </div>
                                <div class="looob">
                                                <?php
                                    include('cgmdbconnection.php');
                                    $dibconfig = mysqli_select_db($con,'cgm');
                                    
                                    $query = "SELECT * FROM announcement";
                                    $query_run = mysqli_query($con,$query);
                                    $check_upload = mysqli_num_rows($query_run) > 0; 
                                    if($check_upload){
                                        while($row = mysqli_fetch_array($query_run)){
                                    ?>
                                    <div class="picc">
                                            <img src="<?php echo $row['img']?>" alt="" width="300px">
                                        <div class="infoo">
                                            <h1 class="chap"><?php echo $row['cgmchapter']?></h1><br><hr />
                                            <h1 class="ann"><?php echo $row['announceTitle']?></h1><br>
                                            <p class="caption"><?php echo $row['caption']?></p>
                                        </div>
                                    </div>
                                
                                    <?php
                                            }
                                            } else{
                                                echo "NO ANNOUNCEMENT FOUND!!!";
                                            }
                                    ?>
                            </div>
                        </div>
        </section>
        <!-- Messenger Chat Plugin Code -->
        <div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
var chatbox = document.getElementById('fb-customer-chat');
chatbox.setAttribute("page_id", "498094316971732");
chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
window.fbAsyncInit = function() {
    FB.init({
    xfbml            : true,
    version          : 'v15.0'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!--END OF MESSENGER CHAT PLUGIN CODE-->
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
        
    </body>
</html>