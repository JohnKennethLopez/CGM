<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:admin.php");
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGM</title>
    <link rel="shortcut icon" type="image/png" href="css/image/icon.png">
    <link rel="stylesheet" href="css/editprog.css">
</head>
<body>
    <section id="editevent">
        <div class="labasbtn">
                <div class="back">
                    <div class="inn">
                        <p class="backbtn"> <a href="admin2.php"> Go Back to <br>the Admin</a></p>
                    </div>
                </div>
                <div class="mm">
                    <div class="nn">
                        <p class="bckbtn"> <a href="upload5.php"> Upload<br>Limang Minunto</a></p>
                    </div>
                    <div class="nn">
                        <p class="bckbtn"> <a href="uploadmanna.php"> Upload<br>Daily Manna</a></p>
                    </div>
                    <div class="nn">
                        <p class="bckbtn"> <a href="uploadanswer.php"> Upload<br>Jesus is the Answer</a></p>
                    </div>
                </div>
        </div>
        <div class="table">
            <table class="tablecont">
                <tr>
                    <th>CGM Chapter</th>
                    <th>Live Stream Replay Iframe</th>
                    <th class="DE">EDIT</th>
                </tr>
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM stream";
                    $query_run = mysqli_query($con,$query);
                    $check_attendance = mysqli_num_rows($query_run) > 0; 
                    if($check_attendance){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr class="scroll">
                        <td><?php echo $row['cgmchapter']?></td>
                        <td><?php echo $row['live']?></td>
                        
                        <td><a href="Editprogbtn.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a></td>
                    </tr>
                    <?php
                        }
                        } else{
                            echo " No Information Found!";
                        }
                    

                ?>
            </table>
        </div>
        
    </section>

</body>
</html>