
<html>
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/prog.css">
        <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
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
                <li><a href="findchurch.php">Find a Church</a></li>
                <li><a href="CounMin.php">Council & Ministries</a></li>
                <li class="focus"><a href="">Program</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="prayer.php">Need Prayers?</a></li>
                <li><a href="MisSer.html">Missions & Services</a></li>
                <li><a href="Give.html">Give</a></li>
            </ul>
            </div>
            <h1 class="prhead"> CGM Program</h1>
            <div class="SelectChapter">
                <select name="cgmchapter" onchange="showGoogleMap()" id="church">
                        <option value="select" disabled selected>Choose a CGM Chapter</option>
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
            <div id="main">
                    <?php
                        include ('cgmdbconnection.php');
                    ?>
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='1'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="tanauan">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='10'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="balete">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='3'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="edsa">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='7'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="pulilan">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='15'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="bacoor">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='2'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="bustos">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='4'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="cabuyao">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='5'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="candaba">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='6'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="gattaran">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='8'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="hinigaran">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='9'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="mariveles">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='11'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="nasugbo">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='12'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="navotas">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='13'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="prieto">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='14'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="sampaloc">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='16'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="sanpedro">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='17'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="starosa">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='18'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="taguig">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='19'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

            <div id="tinio">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='20'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
            </div>

        </section>
        
        <section id="watch_program">
        <!--LIMANG MINUTO-->
            <div class="limangminuto">
                <div class="limaH">
                        <h1><span class="five">5</span><i class="limang">Limang</i> <span class="minuto">MINUTO</span></h1>
                    </div>
                <div class="limainfo">
                    <p>Daily devotion. Limang minuto ng salita ng Diyos.</p>
                </div>
            <div class="watch">
                <div class="lima">
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Qujz7pak3zo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WKfngIBEtzs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/UxnqAIMbEt8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/peYt8ax2vzY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Qkwq9JQzg2U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jIhA1-Nj1AA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FfR2g_1d1w4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aygCvgp1hEQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ekxlyTC0Pu0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RE1XNR7JRYk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rQn4Ew7lJ6A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aPgWx3_fJok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/s0dt9ouQHZc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5MaJU2K2eyw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VNLQ82P1Jnk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="limavid">
                        <a href="limang.html"><h1 class="more">See More <i class="limang">Limang</i> <span class="minuto">MINUTO</span></h1></a>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF LIMANG MINUTO-->

        <!--DAILY MANNA-->
        <div class="dailymanna">
            <div class="mannaH">
                <h1>DAILY MANNA</h1>
            </div>
            <div class="limainfo">
                <p>The main purpose of this daily 30-minute program is to encourage and enlighten all the viewers through the Word of God.</p>
            </div>
            <div class="watchManna">
                <div class="daily">
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F1286941102070852%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true" poster="css/image/white.jpg" ></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F1270795317053971%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F1159140261354109%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F483478937166031%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F537530438281501%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F512926534018073%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F479045703992738%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F8127954743941193%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=362&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F676418783736354%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="manna">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/eee1EPTQtIM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF DAILY MANNA-->

        <!--JESUS IS THE ANSWER-->
        <div class="Jesusanswer">
            <div class="answ">
                <h1>JESUS IS THE ANSWER</h1>
            </div>
            <div class="limainfo">
                <p>The main purpose of this daily 30-minute program is to encourage and enlighten all the viewers through the Word of God.</p>
            </div>
            <div class="watchanswer">
                <div class="Jesusisthe">
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F832862051085243%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F4815482711888174%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F1118078545746063%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F815429583104905%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F1158330561778666%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F798982644701796%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F902641164047706%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F1185180615400672%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="answer">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F487435389770347%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--END OF JESUS IS THE ANSWER-->

        <!--DAILY SCRIPTURES-->
        <div class="dailyscriptures">
            <div class="script">
                <h1>DAILY SCRIPTURES</h1>
            </div>
            <div class="limainfo">
                <p>The main purpose of this daily 30-minute program is to encourage and enlighten all the viewers through the Word of God.</p>
            </div>
            <div class="watchscrip">
                <div class="dailyscrip">
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F1449025082232941%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F961269441495985%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F438957558172327%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F839788860387166%2F&show_text=false&width=267&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F428829042759749%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F931399137829214%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F3369530563372304%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F5518785798209165%2F&show_text=false&width=267&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F1244580699435847%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F388097696748186%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F6185719488109222%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F1806373166383060%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F651404353021099%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F814106266403661%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F425507013060350%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="scriptures">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgme.dailyscriptures%2Fvideos%2F488450576504630%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF DAILY SCRIPTURES-->

        <!--DAILY SCRIPTURES-->
        <div class="bedofpromises">
            <div class="bed">
                <h1>BED OF PROMISES</h1>
            </div>
            <div class="limainfo">
                <p>The main purpose of this daily 30-minute program is to encourage and enlighten all the viewers through the Word of God.</p>
            </div>
            <div class="watchbed">
                <div class="bedof">
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F1468104440339356%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F3242849692648385%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F1748560798846264%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F1310328873103996%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F703129420654172%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F1539761846473321%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F431732282408277%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F5585097204911563%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F783513472863651%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F792388795175957%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F1100191694223138%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBOPGGG7%2Fvideos%2F2353430481488650%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="promises">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9axOrq1uYoo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="promises">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/XSbwym7oljk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="promises">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/UiF6d3kBIfI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="promises">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FUC85Hb1YIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="promises">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/m7VSJAMmK5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF BED OF PROMISES-->

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