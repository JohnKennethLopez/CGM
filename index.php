
<html >
    <head>
        <meta charset=" utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CGM</title>
        <link rel="stylesheet" href="css/CGM.css">
        <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
        <script src="JavaScript/menu.js" defer></script>
        <script src="JavaScript/nav.js" defer></script>
        <script src="JavaScript/image.js" defer></script>
        <script src="JavaScript/scroll.js" defer></script>
    </head>
    <section id="bg-image">
        <img class="lg" src="logo.png" alt="">
        <div class="menu">
            <div class="bur"></div>
        </div>
        <div class="nav" data-visible="false">
            <h1 class="logo"><img class="logoimg" src="logo.png" alt="">Church of God's<br> Miracles</h1>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="findchurch.html">Find a Church</a></li>
                    <li><a href="CounMin.html">Council & Ministries</a></li>
                    <li><a href="program.html">Program</a></li>
                    <li><a href="event.php">Events</a></li>
                    <li><a href="prayer.php">Need Prayers?</a></li>
                    <li><a href="MisSer.html">Missions & Services</a></li>
                    <li><a href="Give.html">Give</a></li>
                </ul>
        </div>
        <h1 class="welcome">Welcome to Church of God's Miracles Website!</h1>

        <div class="wh">
            <p class="who"><a href="about.html">Who We Are</a></p>
            <p class="where"><a href="findchurch.html">Where We Are</a><p>
        </div>
        
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <?php
                                    include('cgmdbconnection.php');
                                    $dibconfig = mysqli_select_db($con,'cgm');
                                    
                                    $query = "SELECT * FROM home";
                                    $query_run = mysqli_query($con,$query);
                                    $check_upload = mysqli_num_rows($query_run) > 0; 
                                    if($check_upload){
                                        while($row = mysqli_fetch_array($query_run)){
                                    ?>
                <div class="img first">
                    <img class="photo" src="<?php echo $row['image']?>" alt="">
                </div>
                <div class="img">
                    <img class="photo" src="<?php echo $row['img']?>" alt="">
                </div>
                <div class="img">
                    <img class="photo" src="<?php echo $row['pic']?>" alt="">
                </div>
                <div class="img">
                    <img class="photo" src="<?php echo $row['photo']?>" alt="">
                </div>
                <?php
                        }
                        } else{
                            echo "NO EVENT FOUND!!!";
                        }
                    

                ?>
                <div class="auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>
            <div class="nav-man">
                <label for="radio1" class="manbtn"></label>
                <label for="radio2" class="manbtn"></label>
                <label for="radio3" class="manbtn"></label>
                <label for="radio4" class="manbtn"></label>
            </div>
        </div>
    </section>
        <section id="tenets">
            <div class="tenF">
                <h1 class="faith">Tenet's of Faith</h1>
                    <h3 class="believe">We believe in the following tenets of faith as the basis and foundation of the <br><span class="spanCGM">Church of God's Miracles</span></h3>
                        <h1 class="num">1</h1><p class="TF">The Scriptures Inspired</p>
                            <p class="verse"><span class="chap">1Timothy 3:15-17~~~</span> You have been taught the holy Scriptures from childhood, and they have given you the wisdom to receive the salvation that comes by trusting in Christ Jesus. All Scripture is inspired by God and is useful to teach us what is true and to make us realize what is wrong in our lives. It corrects us when we are wrong and teaches us to do what is right. God uses it to prepare and equip his people to do every good work.</p>
                        <h1 class="num">2</h1><p class="TF">The Godhead</p>
                            <p class="verse"><span class="chap">1John 5:7</span> So we have these three witnesses.</p>
                        <h1 class="num">3</h1><p class="TF">The Deity of the Lord Jesus Christ</p>
                            <p class="verse"><span class="chap">1Timothy 3:16</span> Without question, this is the great mystery of our faith:
                            Christ was revealed in a human body
                            and vindicated by the Spirit.
                            He was seen by angels
                            and announced to the nations.
                            He was believed in throughout the world
                            and taken to heaven in glory.</p>
                        <h1 class="num">4</h1><p class="TF">The Fall of Man</p>
                            <p class="verse"><span class="chap">Roman 5:12</span> When Adam sinned, sin entered the world. Adam`s sin brought death, so death spread to everyone, for everyone sinned.</p>
                        <h1 class="num">5</h1><p class="TF">The Salvation of Man</p>
                            <p class="verse"><span class="chap">Ephesians 2:8-9</span> God saved you by his grace when you believed. And you can`t take credit for this; it is a gift from God. Salvation is not a reward for the good things we have done, so none of us can boast about it.</p>
                        <h1 class="num">6</h1><p class="TF">The Ordinances of the Church</p>
                            <p class="verse"><span class="chap">Matthew 28:19</span> Therefore, go and make disciples of all the nations, baptizing them in the name of the Father and the Son and the Holy Spirit.</p>
                            <p class="verse"><span class="chap">1Cor 11:23-25</span> For I pass on to you what I received from the Lord himself. On the night when he was betrayed, the Lord Jesus took some bread and gave thanks to God for it. Then he broke it in pieces and said, “This is my body, which is given for you. Do this in remembrance of me.” In the same way, he took the cup of wine after supper, saying, “This cup is the new covenant between God and his people—an agreement confirmed with my blood. Do this in remembrance of me as often as you drink it.”</p>
                        <h1 class="num">7</h1><p class="TF">The Baptism in the Holy Ghost</p>
                            <p class="verse"><span class="chap">Acts 1:4-5,8</span> Once when he was eating with them, he commanded them, “Do not leave Jerusalem until the Father sends you the gift he promised, as I told you before. John baptized with water, but in just a few days you will be baptized with the Holy Spirit.” But you will receive power when the Holy Spirit comes upon you. And you will be my witnesses, telling people about me everywhere—in Jerusalem, throughout Judea, in Samaria, and to the ends of the earth.”</p>
                        <h1 class="num">8</h1><p class="TF"> The Evidence of the Baptism in the Spirit</p>
                            <p class="verse"><span class="chap">Acts 1:8,2-4</span> But you will receive power when the Holy Spirit comes upon you. And you will be my witnesses, telling people about me everywhere—in Jerusalem, throughout Judea, in Samaria, and to the ends of the earth.” Until the day he was taken up to heaven after giving his chosen apostles further instructions through the Holy Spirit. During the forty days after he suffered and died, he appeared to the apostles from time to time, and he proved to them in many ways that he was actually alive. And he talked to them about the Kingdom of God. 
                            Once when he was eating with them, he commanded them, “Do not leave Jerusalem until the Father sends you the gift he promised, as I told you before. </p>  
                        <h1 class="num">9</h1><p class="TF">Sanctification</p>
                            <p class="verse"><span class="chap">1Thessalonians 4:3</span> God`s will is for you to be holy, so stay away from all sexual sin. </p>  
                        <h1 class="num">10</h1><p class="TF">The Church and its Mission</p>
                            <p class="verse"><span class="chap">Matthew 28:19-20</span> Therefore, go and make disciples of all the nations, baptizing them in the name of the Father and the Son and the Holy Spirit. Teach these new disciples to obey all the commands I have given you. And be sure of this: I am with you always, even to the end of the age.”</p>  
                        <h1 class="num">11</h1><p class="TF">The Ministry</p>
                            <p class="verse"><span class="chap">Ephesians 4:11-13</span> Now these are the gifts Christ gave to the church: the apostles, the prophets, the evangelists, and the pastors and teachers. Their responsibility is to equip God`s people to do his work and build up the church, the body of Christ. This will continue until we all come to such unity in our faith and knowledge of God`s Son that we will be mature in the Lord, measuring up to the full and complete standard of Christ. </p>  
                        <h1 class="num">12</h1><p class="TF">The Divine Healing</p>
                            <p class="verse"><span class="chap">1Pet 2:24</span> He personally carried our sins
                             in his body on the cross
                            so that we can be dead to sin
                            and live for what is right.
                            By his wounds
                            you are healed.</p>  
                        <h1 class="num">13</h1><p class="TF">The Biblical Prosperity</p>
                            <p class="verse"><span class="chap">2Chronicles 26:5</span> 5Uzziah sought God during the days of Zechariah, who taught him to fear God. And as long as the king sought guidance from the Lord, God gave him success.</p>  
                        <h1 class="num">14</h1><p class="TF">The Praise and Worship</p>
                            <p class="verse"><span class="chap">John 4:23-24</span> But the time is coming—indeed it`s here now—when true worshipers will worship the Father in spirit and in truth. The Father is looking for those who will worship him that way. For God is Spirit, so those who worship him must worship in spirit and in truth.”</p>
                    <div class="white">        
                            <h1 class="num">15</h1><p class="TF">The Blessed Hope</p>
                                <p class="verse"><span class="chap">1Thessalonians 4:17</span> Then, together with them, we who are still alive and remain on the earth will be caught up in the clouds to meet the Lord in the air. Then we will be with the Lord forever. </p>  
                            <h1 class="num">16</h1><p class="TF">The Millenial Reign of Christ</p>
                                <p class="verse"><span class="chap">Revelation 20:4</span> Then I saw thrones, and the people sitting on them had been given the authority to judge. And I saw the souls of those who had been beheaded for their testimony about Jesus and for proclaiming the word of God. They had not worshiped the beast or his statue, nor accepted his mark on their foreheads or their hands. They all came to life again, and they reigned with Christ for a thousand years.</p>  
                            <h1 class="num">17</h1><p class="TF">The Final Judgement</p>
                                <p class="verse"><span class="chap">Revelation 20:11</span> And I saw a great white throne and the one sitting on it. The earth and sky fled from his presence, but they found no place to hide.</p>  
                            <h1 class="num">18</h1><p class="TF">The New Heaven and The Newearth</p>
                                <p class="verse"><span class="chap">Revelation 20:1</span> Then I saw an angel coming down from heaven with the key to the bottomless pit and a heavy chain in his hand. </p> 
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