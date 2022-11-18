<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/CM.css">
        <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
        <script src="JavaScript/menu.js" defer></script>
        <script src="JavaScript/nav.js" defer></script>
        <script src="JavaScript/scroll.js" defer></script>
        <script src="JavaScript/CMslide.js" defer></script>
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
            <li class="focus"><a href="">Council & Ministries</a></li>
            <li><a href="program.php">Program</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="prayer.php">Need Prayers?</a></li>
            <li><a href="MisSer.html">Missions & Services</a></li>
            <li><a href="Give.html">Give</a></li>
        </ul>
        </div>
    
            <h1 class="cmhead">CGM </h1>
            <h2 class="cmhead">Council and Ministries</h2>
            <!--Council and Ministry video-->
                <?php
                    include ('cgmdbconnection.php');
                ?>
                    <?php
                        $sql = "SELECT * FROM cmvideo WHERE id='1'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $video = $row['video'];
                    ?>
            <video class="video" autoplay muted loop controls>
                <source src="<?php echo $video; ?>" type="video/mp4">
                Your browser does not support HTML video.
            </video>
    </section>
        <section id="CouncilMinistry">
                    <?php
                        $sql = "SELECT * FROM cmvideo WHERE id='1'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $head = $row['head'];
                    ?>
            <div class="discrip">
                <h4><?php echo $head; ?></h4>
            </div>
                <div class="readmore">
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='1'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <img class="slide left" src="<?php echo $image; ?>" alt="women">
                        <p class="slide right"><?php echo $info; ?></p>
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='2'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <p class="slide left"><?php echo $info; ?></p>
                        <img class="slide right" src="<?php echo $image; ?>" alt="men">
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='3'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <img class="slide left" src="<?php echo $image; ?>" alt="ymc">
                        <p class="slide right"><?php echo $info; ?></p>
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='4'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <p class="slide left"><?php echo $info; ?></p>
                        <img class="slide right" src="<?php echo $image; ?>" alt="yam">
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='5'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <img class="slide left" src="<?php echo $image; ?>" alt="ycouples">
                        <p class="slide right"><?php echo $info; ?></p>
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='6'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <p class="slide left"><?php echo $info; ?></p>
                        <img class="slide right" src="<?php echo $image; ?>" alt="seniors">
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='7'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <img class="slide left" src="<?php echo $image; ?>" alt="child">
                        <p class="slide right"><?php echo $info; ?></p>
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='8'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <p class="slide left"><?php echo $info; ?></p>
                        <img class="slide right" src="<?php echo $image; ?>" alt="music">
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='9'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <img class="slide left" src="<?php echo $image; ?>" alt="media">
                        <p class="slide right"><?php echo $info; ?></p>
                    </div>
                    <?php
                        $sql = "SELECT * FROM cmimage WHERE id='11'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $info = $row['info'];
                    ?>
                    <div class="pic">
                        <p class="slide left"><?php echo $info; ?></p>
                        <img class="slide right" src="<?php echo $image; ?>" alt="dance">
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
    </body>
</html>