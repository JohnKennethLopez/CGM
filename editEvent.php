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
    <link rel="stylesheet" href="css/editEvent.css">
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
                    <th>Event Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th class="DE">DELETE & EDIT</th>
                </tr>
                <?php
                    $con = new mysqli('localhost','root','','cgm');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM upcoming";
                    $query_run = mysqli_query($con,$query);
                    $check_attendance = mysqli_num_rows($query_run) > 0; 
                    if($check_attendance){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr class="scroll">
                        <td><img src="<?php echo $row['image']?>" alt="" width="80px"></td>
                        <td><?php echo $row['title']?></td>
                        <td><?php echo $row['des']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['time']?></td>
                        <td><?php echo $row['loc']?></td>
                        <td><a href="Editbtn.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a><a href="deleteevent.php?delete=<?php echo $row['id']; ?>"><button class="del">delete</button></a></td>
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

