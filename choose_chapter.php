<?php
session_start();
include('cgmdbconnection.php');
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
                <h1 class="findhead">Select Chapter for your Appointment</h1>
            </div>
            <div class="SelectChapter">
                <form method="POST" action="check.php">
                <select name="cgmchapter" id="church">
                        <option value="select" disabled selected>Choose a CGM Church</option>
                        <?php
                        $chapter = "SELECT * FROM chapter";
                        $chapter_run = mysqli_query($con, $chapter);

                        while($row = mysqli_fetch_array($chapter_run)){

                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['cgmchapter'] ?></option>
                        <?php } ?>
                </select>

                <button class="button" name="submit" id="near" >Submit</button>
                
</form>

            </div>
    </section>


            </body>
</html>