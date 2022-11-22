
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
                <li class="focus"><a href="">Find a Church</a></li>
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li><a href="program.php">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li><a href="MisSer.php">Missions & Services</a></li>
                <li><a href="Give.php">Give</a></li>
            </ul>
            </div>
        
                
                    <div class="choose">
                        <div class="top">
                            <h1 class="findhead">Find CGM Chruch<br>Near To You</h1>
                            <p class="text">"Let us not give up meeting together, as some are in the habit of doing, but let us encourge one another-and all the more as you see the Day approaching."</p>
                            <p class="verse">-Hebrews 10:25</p>
                        </div>
                        <div class="SelectChapter">
                            <select name="cgmchapter" onchange="showGoogleMap()" id="church">
                                    <option value="select" disabled selected>Choose a CGM Church</option>
                                    <option value="CGM Las Piñas Main">CGM Las Piñas Main</option>
                                    <option value="CGM Bacoor, Cavite">CGM Bacoor, Cavite</option>
                                    <option value="CGM Balete, Batangas">CGM Balete, Batangas</option>
                                    <option value="CGM Bustos, Bulacan">CGM Bustos, Bulacan</option>
                                    <option value="CGM Cabuyao, Laguna">CGM Cabuyao, Laguna</option>
                                    <option value="CGM Candaba, Pampanga">CGM Candaba, Pampanga</option>
                                    <option value="CGM EDSA Mandaluyong">CGM EDSA Mandaluyong</option>
                                    <option value="CGM Gattaran, Cagayan">CGM Gattaran, Cagayan</option>
                                    <option value="CGM Hinigaran, Negros">CGM Hinigaran, Negros</option>
                                    <option value="Tanauan">CGM Mabini, Tanauan</option>
                                    <option value="CGM Mariveles, Bataan">CGM Mariveles, Bataan</option>
                                    <option value="CGM Nasugbo, Batangas">CGM Nasugbu, Batangas</option>
                                    <option value="CGM Navotas City">CGM Navotas City</option>
                                    <option value="CGM Prieto Diaz, Sorsogon">CGM Prieto Diaz Sorsogon</option>
                                    <option value="CGM Pulilan, Bulacan">CGM Pulilan, Bulacan</option>
                                    <option value="CGM Sampaloc, Quezon">CGM Sampaloc, Quezon</option>
                                    <option value="CGM San Pedro, Laguna">CGM San Pedro, Laguna</option>
                                    <option value="CGM Sta. Rosa, Laguna">CGM Sta. Rosa, Laguna</option>
                                    <option value="CGM Taguig City">CGM Taguig City</option>
                                    <option value="CGM Gen. Tinio, Nueva Ecija">CGM Gen. Tinio, Nueva Ecija</option>
                            </select>
                        </div>
                    </div>
        </section>

        <section id="googlemap">
            <div id="tanauan">
                <div class="outer">
                    <?php
                    include ('cgmdbconnection.php');
                    ?>
                    <?php
                    $sql = "SELECT * FROM gmap WHERE id='10'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $f2f = $row['f2fservice'];
                    $online = $row['online'];
                    $add = $row['address'];
                    $gmap = $row['googlemap'];
                    $fb = $row['fblink'];
                    ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Mabini Tanauan
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
                <div class="map">
                    <?php echo $gmap; ?>
                </div>
            </div>
            
            <div id="balete">
                <div class="outer">
                    <?php
                    $sql = "SELECT * FROM gmap WHERE id='3'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $f2f = $row['f2fservice'];
                    $online = $row['online'];
                    $add = $row['address'];
                    $gmap = $row['googlemap'];
                    $fb = $row['fblink'];
                    ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Balete
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
                <div class="map">
                        <?php echo $gmap; ?>
                </div>
            </div>

            <div id="main">
                <div class="outer">
                    <?php
                    $sql = "SELECT * FROM gmap WHERE id='1'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $f2f = $row['f2fservice'];
                    $online = $row['online'];
                    $add = $row['address'];
                    $gmap = $row['googlemap'];
                    $fb = $row['fblink'];
                    ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Las Piñas Main
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
                <div class="map">
                        <?php echo $gmap; ?>
                </div>
            </div>

            <div id="pulilan">
                <div class="outer">
                    <?php
                    $sql = "SELECT * FROM gmap WHERE id='15'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $f2f = $row['f2fservice'];
                    $online = $row['online'];
                    $add = $row['address'];
                    $gmap = $row['googlemap'];
                    $fb = $row['fblink'];
                    ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Pulilan
                        </h1>
                        
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
                <div class="map">
                    <?php echo $gmap; ?>
                </div>
            </div>

            <div id="edsa">
                <div class="outer">
                    <?php
                    $sql = "SELECT * FROM gmap WHERE id='7'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $f2f = $row['f2fservice'];
                    $online = $row['online'];
                    $add = $row['address'];
                    $gmap = $row['googlemap'];
                    $fb = $row['fblink'];
                    ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Edsa
                        </h1>
                        
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
                <div class="map">
                        <?php echo $gmap; ?>
                </div>
            </div>

            <div id="bacoor">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='2'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Bacoor, Cavite
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
                <div class="map">
                    <?php echo $gmap; ?>
                </div>
            </div>

            <div id="bustos">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='4'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Bustos, Bulacan
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
                <div class="map">
                    <?php echo $gmap; ?>
                </div>
            </div>

            <div id="cabuyao">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='5'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Cabuyao, Laguna
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
                <div class="map">
                    <?php echo $gmap; ?>
                </div>
            </div>

            <div id="candaba">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='6'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Candaba, Pampanga
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="gattaran">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='8'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Gattaran, Cagayan
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="hinigaran">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='9'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Hinigaran, Negros
                        </h1>
                        
                        <h3 class="h3cgm">
                            WE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!
                        </h3>
                    </div>
                </div>
            </div>

            <div id="mariveles">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='11'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Mariveles, Bataan
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="nasugbo">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='12'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Nasugbo, Batangas
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="navotas">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='13'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Navotas City
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="prieto">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='14'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Prieto Diaz, Sorsogon
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="sampaloc">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='16'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Sampaloc, Quezon
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="sanpedro">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='17'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM San Pedro, Laguna
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="starosa">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='18'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Sta. Rosa, Laguna
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="taguig">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='19'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Taguig City
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
                    <div class="map">
                        <?php echo $gmap; ?>
                    </div>
                </div>
            </div>

            <div id="tinio">
                <div class="outer">
                        <?php
                            $sql = "SELECT * FROM gmap WHERE id='20'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            $f2f = $row['f2fservice'];
                            $online = $row['online'];
                            $add = $row['address'];
                            $gmap = $row['googlemap'];
                            $fb = $row['fblink'];
                        ?>
                    <div class="inner">
                        <h1 class="h1cgm">
                            CGM Gen. Tinio, Nueva Ecija
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
                    <div class="map">
                        <?php echo $gmap; ?>
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
    </body>
</html>