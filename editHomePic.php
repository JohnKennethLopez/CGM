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
    <link rel="stylesheet" href="css/editHomePic.css">
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
                    <th class="DE"> EDIT</th>
                </tr>
                <?php
                    $con = new mysqli('localhost','root','','cgm');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    $query = "SELECT * FROM home";
                    $query_run = mysqli_query($con,$query);
                    $check_attendance = mysqli_num_rows($query_run) > 0; 
                    if($check_attendance){
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <tr class="scroll">
                        <td><img src="<?php echo $row['image']?>" alt="" width="200px"></td>
                        <td><a href="editimage.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a></td>
                    </tr>
                    <tr class="scroll">
                        <td><img src="<?php echo $row['img']?>" alt="" width="200px"></td>
                        <td><a href="editimg.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a></td>
                    </tr>
                    <tr class="scroll">
                        <td><img src="<?php echo $row['pic']?>" alt="" width="200px"></td>
                        <td><a href="editpic.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a></td>
                    </tr>
                    <tr class="scroll">
                        <td><img src="<?php echo $row['photo']?>" alt="" width="200px"></td>
                        <td><a href="editphoto.php?edit=<?php echo $row['id']; ?>"><button class="edit">edit</button></a></td>
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
<<<<<<< HEAD
=======

>>>>>>> 2d96d18e26a5aef646c0981383efdf952df60d03
