<?php
include('cgmdbconnection.php');
$dibconfig = mysqli_select_db($con,'cgm');
?>
<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/find.css">
        <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
        <script src="JavaScript/menu.js" defer></script>
        <script src="JavaScript/nav.js" defer></script>
        <script src="JavaScript/scroll.js" defer></script>
        <script src="JavaScript/Gmap.js" defer></script>
    </head>
    <body>
        <div id="bg-image">
            <div class="homelg">
                <a href="index.php"><img class="lg" src="logo.png" alt=""></a>
            </div>
            <div class="menu">
                <div class="bur"></div>
            </div>
            <div class="nav" data-visible="false" >
                <h1 class="logo"><a href="index.php"><img class="logoimg" src="logo.png" alt="">Church of God's<br> Miracles</a></h1>
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="findchurch.php">Find a Church</a></li>
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li><a href="MisSer.php">Missions & Services</a></li>
                <li><a href="Give.php">Give</a></li>
            </ul>
            </div>

                <?php
                $id = $_GET['id'];
                    $distance = "SELECT * FROM gmap WHERE id = $id";
                    $distance_run = mysqli_query($con,$distance);
                    while($row = mysqli_fetch_array($distance_run)){
                ?>

                <div   style="padding-top: 100px; max-width: 90%; margin: auto;">
                    <?php echo $row['googlemap'] ?>
                </div>

                <div>
                <div class="outer">
                        <?php
                        $chapter = $row['cgmchapter'];
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            
                        </h1>
                        <hr /><br>
                        <h3 class="h3cgm">
                            Face-to-Face Service :
                        </h3>
                        <p class="psched">
                            <?php echo $f2f; ?>
                        </p>
                        <hr /><br>
                        <h3 class="h3cgm">
                            Online Service :
                        </h3>
                        <div class="psched">
                            <a href="<?php echo $fb; ?>"><img class="fblink" src="css/image/fb.png"> Facebook</a>
                        </div>
                        <p class="psched">
                            <?php echo $online; ?>
                        </p>
                        <hr /><br>
                        <p class="padd">
                            <?php echo $add; ?>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
                
                        <?php } ?> 

        </div>


    </body>
</html>