
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
                <li><a href="MisSer.php">Missions & Services</a></li>
                <li><a href="Give.php">Give</a></li>
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
            <div id="main">
                    <?php
                        include ('cgmdbconnection.php');
                    ?>
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='1'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="tanauan">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='10'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="balete">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='3'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="edsa">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='7'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="pulilan">
                    <?php
                        $sql = "SELECT * FROM stream WHERE id='15'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="bacoor">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='2'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="bustos">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='4'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="cabuyao">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='5'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="candaba">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='6'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="gattaran">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='8'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="hinigaran">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='9'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="mariveles">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='11'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="nasugbo">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='12'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="navotas">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='13'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="prieto">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='14'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="sampaloc">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='16'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="sanpedro">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='17'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="starosa">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='18'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="taguig">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='19'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
                </div>
            </div>

            <div id="tinio">
            <?php
                        $sql = "SELECT * FROM stream WHERE id='20'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        $live = $row['live'];
                        $title = $row['title'];
                    ?>
                <div class="live">
                    <?php echo $live; ?>
                </div>
                <div class="streamTitle">
                    <p><?php echo $title; ?></p>
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
                <?php
                    include('cgmdbconnection.php');
                ?>
                    <?php
                        $dibconfig = mysqli_select_db($con,'cgm');
                        
                        $query = "SELECT * FROM limang order by id desc";
                        $query_run = mysqli_query($con,$query);
                        $check_upload = mysqli_num_rows($query_run) > 0; 
                        if($check_upload){
                            while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <div class="limavid">
                        <?php echo $row['limang']?>
                    </div>
                    <?php
                        }
                        } else{
                            echo "NO Limang Minuto Video FOUND!!!";
                        }
                    ?>
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
                    
                    <?php
                        $dibconfig = mysqli_select_db($con,'cgm');
                        
                        $query = "SELECT * FROM manna order by id desc";
                        $query_run = mysqli_query($con,$query);
                        $check_upload = mysqli_num_rows($query_run) > 0; 
                        if($check_upload){
                            while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <div class="manna">
                        <?php echo $row['manna']?>
                    </div>
                    <?php
                        }
                        } else{
                            echo "NO Daily Manna Video FOUND!!!";
                        }
                    ?>
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
                    <?php
                        $dibconfig = mysqli_select_db($con,'cgm');
                        
                        $query = "SELECT * FROM answer order by id desc";
                        $query_run = mysqli_query($con,$query);
                        $check_upload = mysqli_num_rows($query_run) > 0; 
                        if($check_upload){
                            while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <div class="answer">
                        <?php echo $row['answer']?>
                    </div>
                    <?php
                        }
                        } else{
                            echo "NO Jesus is the Answer Video FOUND!!!";
                        }
                    ?>
                </div>
            </div>
        </div>
        <!--END OF JESUS IS THE ANSWER-->

        

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