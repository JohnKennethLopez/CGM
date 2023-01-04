<!-- code po ng parang gps keme po na hinihingi po nila di ko po magana to may error po dun sa PDO -->
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
            <table>
                <tr>
                        <th>CGM Chapter</th>
                        <th>Distance as Kilometers(KM)</th>
                    </tr>
                <?php
                    define('DB_HOST', 'localhost');
                    define('DB_USER', 'root');
                    define('DB_PASS', '');
                    define('DB_NAME', 'cgm');
    
                    try{
                        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'utf8'"));
                    
                    }
                    catch(PDOException $e){
                        exit("Error:".$e ->getMessage());
                    }
                    ?>
                    <?php

                    $lat = floatval($_GET['lat']);
                    $long = floatval($_GET['long']);

                    $sql = "SELECT id, (3959 * acos( cos(radians($lat) ) * cos (radians( lat ) ) * cos ( radians( lng ) - radians($long) ) + sin(radians ($lat) * sin ( radians ( lat ) ) ) ) AS distance FROM near HAVING distance < 25 ORDER BY distance LIMIT 0 , 20";

                    $query = $dbh ->prepare($sql);
                    $query->execute();
                    $results = $query -> fetchALL(PDO::FETCH_OBJ);
                    $cnt=1;

                    if($query->rowCount() > 0){
                        foreach ($results as $result){
                ?>
                
                    
                    <tr>
                        <td><?php echo htmlentities($result->cgmchapter); ?></td>
                        <td><?php echo htmlentities($result->distance); ?></td>
                    </tr>
                
                <?php
                        }
                    }
                ?>
            </table>
        </section>
    </body>
</html>