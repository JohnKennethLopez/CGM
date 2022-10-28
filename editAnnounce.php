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
    <link rel="stylesheet" href="css/editAnnounce.css">
</head>
<body>
    <section id="editevent">
        <div class="back">
            <div class="inn">
                <p class="backbtn"> <a href="admin2.php"> Go Back to <br>the Admin</a></p>
            </div>
        </div>
        <div class="table">
            <table class="tablecont">
                <tr>
                    <th>Image</th>
                    <th>CGM Chapter</th>
                    <th>Announcement Title</th>
                    <th>Caption</th>
                    <th class="DE">DELETE & EDIT</th>
                </tr>
                <?php
                    $con = new mysqli('localhost','root','','cgm');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM announcement";
                    $query_run = mysqli_query($con,$query);
                    $check_attendance = mysqli_num_rows($query_run) > 0; 
                    if($check_attendance){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr class="scroll">
                        <td><img src="<?php echo $row['img']?>" alt="" width="80px"></td>
                        <td><?php echo $row['cgmchapter']?></td>
                        <td><?php echo $row['announceTitle']?></td>
                        <td><?php echo $row['caption']?></td>
                        <td><a href="EditAnnBtn.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a><a href="deleteann.php?delete=<?php echo $row['id']; ?>"><button class="del">delete</button></a></td>
                    </tr>
                    <?php
                        }
                        } else{
                            echo " No Event Found!";
                        }
                    

                ?>
            </table>
        </div>
        
    </section>
</body>
</html>

