<?php
include('cgmdbconnection.php');
$dibconfig = mysqli_select_db($con,'cgm');
?>
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

                    $distance = "SELECT *, ST_Distance_Sphere( point ('$long1', '$lat1'), 
                    point(lng, lat)) * .000621371192 AS `distance_in_miles` FROM near ORDER BY distance_in_miles";

                    $distance_run = mysqli_query($con, $distance);
                }
                ?>

                <div   style="padding-top: 100px;">

                <table style="width:100%; text-align: center;">
                    <tr>
                        <th>CGM Chapter</th>
                        <th>Location</th>
                        <th>Distance in Miles</th>
                    </tr>

                    <?php 
                        while ($row = mysqli_fetch_array($distance_run))
                        {
                    ?>

                    <tr>
                        <td><?php echo $row['cgmchapter'] ?></td>
                        <td><a href="gmap.php?map=<?=$row['id']?>" class="button" name="near" id="near">Show on Map</a></td>
                        <td><?php echo $row['distance_in_miles'] ?></td>
                    </tr>

                    <?php  } ?>
                </table>	
                </div>
                


        </div>


    </body>
</html>