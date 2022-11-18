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
    <link rel="stylesheet" href="css/editcm.css">
</head>
<body>
    <section id="editevent">
        <div class="labasbtn">
            <div class="back">
                <div class="inn">
                    <p class="backbtn"> <a href="admin2.php"> Go Back to <br>the Admin</a></p>
                </div>
            </div>
            <div class="video">
                <div class="iinn">
                    <p class="vidbtn"> <a href="editvideo.php">Edit the Video <br>in C&M page</a></p>
                </div>
            </div>
        </div>
        <div class="table">
            <table class="tablecont">
                <tr>
                    <th>IMAGE</th>
                    <th>INFO/DESCRIPTION</th>
                    <th class="DE">EDIT</th>
                </tr>
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM cmimage";
                    $query_run = mysqli_query($con,$query);
                    $check_attendance = mysqli_num_rows($query_run) > 0; 
                    if($check_attendance){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr class="scroll">
                        <td><?php echo $row['image']?></td>
                        <td><?php echo $row['info']?></td>
                        <td><a href="cmup.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a></td>
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