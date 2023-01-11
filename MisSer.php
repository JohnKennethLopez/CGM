
<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/MIS.css">
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
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li class="focus"><a href="">Missions & Services</a></li>
                <li><a href="Give.php">Give</a></li>
            </ul>
            </div>
            <h1 class="mshead"> Missions <br>& Services</h1>
            <div class="cont">        
                <h1 class="mish1"><i>MISSIONS</i></h1>
                    <div class="mission">
                    <?php
                        include ('cgmdbconnection.php');
                    ?>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='1'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="reach">
                            <div class="reachpic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="reachH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="reachinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='2'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="medical">
                            <div class="medicalpic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="medicalH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="medicalinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='3'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="dental">
                            <div class="dentalpic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="dentalH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="dentalinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='4'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="coffee">
                            <div class="coffeepic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="coffeeH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="coffeeinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='5'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="house">
                            <div class="housepic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="houseH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="houseinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="service">
            <div class="set">
                <a href="choose_chapter.php"><h3>Set an Appointment<br>Reservation</h3></a>
            </div>
            <div class="cont">        
                <h1 class="mish1"><i>SERVICES</i></h1>
                    <div class="mission">
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='7'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="reach">
                            <div class="reachpic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="reachH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="reachinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='8'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="medical">
                            <div class="medicalpic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="medicalH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="medicalinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='9'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="dental">
                            <div class="dentalpic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="dentalH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="dentalinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='10'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="coffee">
                            <div class="coffeepic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="coffeeH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="coffeeinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='11'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="house">
                            <div class="housepic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="houseH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="houseinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
                        <?php
                            $sql = "SELECT * FROM misser WHERE id='6'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $image = $row['image'];
                            $title = $row['title'];
                            $info = $row['info'];
                        ?>
                        <div class="house">
                            <div class="housepic">
                                <img class="MISpic" src="<?php echo $image; ?>" alt="">
                            </div>
                            <div class="houseH">
                                <h1 class="h1title"><?php echo $title; ?></h1>
                            </div>
                            <div class="houseinfo">
                                <p class="P_info"><?php echo $info; ?></p>
                            </div>
                        </div>
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