<?php
include('cgmdbconnection.php');

session_start();





if(isset($_POST['loginsubmit'])){
$username=$_POST['username'];
$password=$_POST['password'];




            $level = "SELECT * FROM admin WHERE username='$username' and password='$password'";
            $level_run = mysqli_query($con, $level);
            $row = mysqli_fetch_array($level_run);
            $cgm_level = $row['level'];
            $chapter = $row['cgm_id'];

            if($cgm_level === '1')
            {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['id'];
                header('location:admin2.php');
            } elseif ($cgm_level === '0'){
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['id'];
                header("location: chapter_admin.php?chapter=$chapter");
            }else{
                die(mysqli_error($con));    
            }


    }



?>



<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGM</title>
    <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
    <link rel="stylesheet" href="css/admincss.css">
    <script src="checker.js" defer></script>
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack(),0");
            window.onunload=function(){null;}
    </script>
</head>
<body>
    <section id="admin">
        <div class="adlogin">
            <div class="adlogo">
                
                <h1 class="CGMh1"><img class="logo" src="logo.png" alt=""><br>CHURCH<br>OF GOD'S <br>MIRACLES<br></h1>
            </div>
            <div class="outer">
                <div class="login">
                    <form  method="POST">
                        <br><h1 class="cgmadmin">CGM <br>ADMIN</h1><br><br>
                        <input type="text" id="user" name="username" placeholder="Username"><br><br><br>
                        <input type="password" id="pass" name="password" placeholder="Password"><br><br>
                        <input type="submit" name="loginsubmit" id="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>