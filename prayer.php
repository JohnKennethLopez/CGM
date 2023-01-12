<?php session_start(); 
include('cgmdbconnection.php');
?>

<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/pray.css">
        <link rel="shortcut icon" type="css/image/png" href="css/image/icon.png">
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
                <li><a href="about.php">About</a></li>
                <li><a href="findchurch.php">Find a Church</a></li>
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li class="focus"><a href="">Need Prayers?</a></li>
                <li><a href="MisSer.php">Missions & Services</a></li>
                <li><a href="Give.php">Give</a></li>
            </ul>
            </div>
            <div class="form">
                    
                <div class="prayerform">
                    <form action="pray_insert.php" method="POST">
                        <h1>Prayer Requests / Prayer Reports</h1>
                        <div class="details">
                            <div class="inputdet">
                                <label for="church">CGM Chapter</label>
                                <select name="chapter" id="church">
                                <option value="" disabled selected>Choose a CGM Church</option>
                                <?php
                                    $chapter = "SELECT * FROM chapter";
                                    $chapter_run = mysqli_query($con, $chapter);

                                    while($row = mysqli_fetch_array($chapter_run)){

                                ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['cgmchapter'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="inputdet">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="inputdet">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="inputdet">
                                <label for="request">Prayer Request</label>
                                <textarea name="request" id="request" placeholder="Enter your Prayer Request"></textarea>
                            </div>
                            <div class="inputdet">
                                <label for="report">Prayer Report</label>
                                <textarea name="report" id="report" placeholder="Enter your Prayer Reports"></textarea>
                            </div>
                                <input name="praysubmit" type="submit" id="send" value="Send">
                        </div>
                    </form>
                </div>
                <h1 class="pyhead">Send us your Prayer Requests & Prayer Reports</h1>
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