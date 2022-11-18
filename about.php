<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/about.css">
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
                <li class="focus"><a href="">About</a></li>
                <li><a href="findchurch.php">Find a Church</a></li>
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li><a href="MisSer.html">Missions & Services</a></li>
                <li><a href="Give.html">Give</a></li>
            </ul>
            </div>

                <h1 class="abhead">About Church of God's Miracles</h1>
                                    <?php
                                    include('cgmdbconnection.php');
                                    $dibconfig = mysqli_select_db($con,'cgm');
                                    
                                    $query = "SELECT * FROM about";
                                    $query_run = mysqli_query($con,$query);
                                    $check_upload = mysqli_num_rows($query_run) > 0; 
                                    if($check_upload){
                                        while($row = mysqli_fetch_array($query_run)){
                                    ?>
                        <div class="history">
                            <h1 class="hisH1">Histoy of Church of God's Miracles</h1><br><br>
                            <p>
                                <?php echo $row['history']?>
                            </p>
                        </div>
                                    <?php
                                            }
                                            } else{
                                                echo "NO ANNOUNCEMENT FOUND!!!";
                                            }
                                    ?>
                </section>
                <section id="misvis">
                                    <?php
                                    include('cgmdbconnection.php');
                                    $dibconfig = mysqli_select_db($con,'cgm');
                                    
                                    $query = "SELECT * FROM about";
                                    $query_run = mysqli_query($con,$query);
                                    $check_upload = mysqli_num_rows($query_run) > 0; 
                                    if($check_upload){
                                        while($row = mysqli_fetch_array($query_run)){
                                    ?>
                    <div class="mv">
                        <div class="mission">
                            <h1>Church Mission</h1>
                            <p class="pp"><?php echo $row['mission']?></p>
                        </div>
                        <div class="vision">
                            <h1>Church Vision</h1>
                            <p class="pp"><?php echo $row['vision']?></p>
                        </div>
                    </div>
                                    <?php
                                            }
                                            } else{
                                                echo "NO ANNOUNCEMENT FOUND!!!";
                                            }
                                    ?>
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