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
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
        <script src="JavaScript/menu.js" defer></script>
        <script src="JavaScript/nav.js" defer></script>
        <script src="JavaScript/scroll.js" defer></script>
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
                if (isset($_GET["lat"])) {
                    $lat1 = $_GET["lat"];
                    $long1 = $_GET["long"];

                    $distance = "SELECT *, (((acos(sin((".$lat1."*pi()/180)) * sin((`lat`*pi()/180))+cos((".$lat1."*pi()/180)) * cos((`lat`*pi()/180)) * cos(((".$long1."- `lng`)*pi()/180))))*180/pi())*60*1.1515*1.609344) AS distance_in_km FROM gmap ORDER BY distance_in_km";

                    $distance_run = mysqli_query($con, $distance);
                }
                ?>

                <div class="table"   style="padding-top: 100px;">

                <table class="tablecont" style="width:100%; text-align: center;">
                    <tr>
                        <th>CGM Chapter</th>
                        <th>Location</th>
                        <th>Distance in km</th>
                    </tr>

                    <?php 
                        while ($row = mysqli_fetch_array($distance_run))
                        {
                    ?>

                    <tr>
                        <td><?php echo $row['cgmchapter'] ?></td>
                        <td>
                            <a href="gmap.php?id=<?=$row['id']?>" class="a_btn" name="near" id="near">
                            <?php
                        if (empty($row['lat'])) {
                            echo "Details";
                        }
                        else{
                            echo "Show on Map";
                            } ?>
                        </a>
                        </td>
                        <td><?php $distance_km = $row['distance_in_km'];
                        if (empty($row['lat'])) {
                            echo "Will be available soon";
                        }
                        else{
                            echo number_format($distance_km, 2);
                            } ?></td>
                    </tr>

                    <?php  } ?>
                </table>	
                </div>
                


        </div>


    </body>
</html>