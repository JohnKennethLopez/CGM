<?php
    include ('cgmdbconnection.php');
?>
<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/gives.css">
        <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
        <script src="JavaScript/menu.js" defer></script>
        <script src="JavaScript/nav.js" defer></script>
        <script src="JavaScript/scroll.js" defer></script>
        <script src="JavaScript/give.js" defer></script>
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
                    <li class="focus"><a href="">Give</a></li>
                </ul>
                </div>
                <div class="givehead">
                    <h1 class="gvhead">"Giving opens the <br>way for receiving"</h1>
                    <P class="text">"A generous person will prosper;
                        <br>whoever refreshes others will be refreshed."</P>
                    <br><i><p class="verse">-Proverbs 11:25</p></i>
                </div>
                <div class="info">
                    <?php
                        $sql = "SELECT * FROM givepic WHERE id='1'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $title = $row['title'];
                        $info = $row['info'];
                    ?>
                    <div class="build">
                        <img class="bm" src="<?php echo $image; ?>" alt="">
                        <h1 class="bmh1"><?php echo $title; ?></h1>
                        <p class="bminfo"><?php echo $info; ?></p>
                    </div>
                    <?php
                        $sql = "SELECT * FROM givepic WHERE id='2'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];
                        $title = $row['title'];
                        $info = $row['info'];
                    ?>
                    <div class="mission">
                        <img class="bm" src="<?php echo $image; ?>" alt="">
                        <h1 class="bmh1"><?php echo $title; ?></h1>
                        <p class="bminfo"><?php echo $info; ?></p>
                    </div>
                </div>

            </section>
            <section id="send">
            <?php
                        $sql = "SELECT * FROM givepic WHERE id='3'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $image = $row['image'];

                    ?>
                <div class="sendhere">
                    <img class="giveimg" src="<?php echo $image; ?>" alt="">
                    <div class="inner">
                        <h1 class="TO">You can send your <br>Tithes and Offerings Here:</h1><br><br>
                        <p class="textt">"Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."</p>
                        <br><i><p class="versee">-2 Corinthians 9:7</p></i><br>
                        <select name="cgmchapter" onchange="ShowMethod()" id="church">
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
                                <option value="CGM Nasugbo, Batangas">CGM Nasugbo, Batangas</option>
                                <option value="CGM Navotas City">CGM Navotas City</option>
                                <option value="CGM Prieto Diaz, Sorsogon">CGM Prieto Diaz Sorsogon</option>
                                <option value="CGM Pulilan, Bulacan">CGM Pulilan, Bulacan</option>
                                <option value="CGM Sampaloc, Quezon">CGM Sampaloc, Quezon</option>
                                <option value="CGM San Pedro, Laguna">CGM San Pedro, Laguna</option>
                                <option value="CGM Sta. Rosa, Laguna">CGM Sta. Rosa, Laguna</option>
                                <option value="CGM Taguig City">CGM Taguig City</option>
                                <option value="CGM Gen. Tinio, Nueva Ecija">CGM Tinio, Nueva Ecija</option>
                        </select>
                    </div>
                </div>
                <div id="main">
                    
                    <?php
                        $sql = "SELECT * FROM give WHERE id='1'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $chap = $row['cgmchapter'];
                        $des = $row['des'];
                        $method = $row['method'];
                        $gcash = $row['gcash'];
                        $gform = $row['gform'];
                    ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>
                    <div id="tanauan">
                        <?php
                            $sql = "SELECT * FROM give WHERE id='10'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="balete">
                        <?php
                            $sql = "SELECT * FROM give WHERE id='3'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="edsa">
                        <?php
                            $sql = "SELECT * FROM give WHERE id='7'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="pulilan">
                        <?php
                            $sql = "SELECT * FROM give WHERE id='15'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="bacoor">
                <?php
                            $sql = "SELECT * FROM give WHERE id='2'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="bustos">
                <?php
                            $sql = "SELECT * FROM give WHERE id='4'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="cabuyao">
                <?php
                            $sql = "SELECT * FROM give WHERE id='5'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="candaba">
                <?php
                            $sql = "SELECT * FROM give WHERE id='6'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="gattaran">
                <?php
                            $sql = "SELECT * FROM give WHERE id='8'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="hinigaran">
                <?php
                            $sql = "SELECT * FROM give WHERE id='9'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="mariveles">
                <?php
                            $sql = "SELECT * FROM give WHERE id='11'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                        <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="nasugbo">
                <?php
                            $sql = "SELECT * FROM give WHERE id='12'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="navotas">
                <?php
                            $sql = "SELECT * FROM give WHERE id='13'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="prieto">
                <?php
                            $sql = "SELECT * FROM give WHERE id='14'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="sampaloc">
                <?php
                            $sql = "SELECT * FROM give WHERE id='16'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="sanpedro">
                <?php
                            $sql = "SELECT * FROM give WHERE id='17'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="starosa">
                <?php
                            $sql = "SELECT * FROM give WHERE id='18'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="taguig">
                <?php
                            $sql = "SELECT * FROM give WHERE id='19'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
                        </div>
                </div>

                <div id="tinio">
                <?php
                            $sql = "SELECT * FROM give WHERE id='20'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result);
                            
                            $chap = $row['cgmchapter'];
                            $des = $row['des'];
                            $method = $row['method'];
                            $gcash = $row['gcash'];
                            $gform = $row['gform'];
                        ?>
                    <div class="border">
                            <h1 class="cgmh1"><?php echo $chap; ?></h1><br><br>
                            <p class="metinfo"><?php echo $des; ?></p><br>
                            <a href="<?php echo $gform; ?>"><?php echo $method; ?></a><br><br>
                            <h1 class="gcash">You can also Send through GCash:</h1>
                            <img class="gcash_icon" src="css/image/gcash.png" alt="">
                            <h1 class="gcashNO"><?php echo $gcash; ?></h1>
                            <p class="gcash_mess">(You can also add a message when you send through Gcash. Thank you and God bless you.)</p>
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