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
    <link rel="stylesheet" href="css/Editbtn.css">
</head>
<body>

<?php

include('cgmdbconnection.php');    

    $id = $_GET['edit'];
    $sql = "SELECT * FROM upcoming WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $img_des = $row['image'];
    $title = $row['title'];
    $des= $row['des'];
    $date = $row['date'];
    $time = $row['time'];
    $loc = $row['loc'];

    if(isset($_POST['submitevent'])){
        $image = $_FILES['image'];
        print_r($_FILES['image']);
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $img_des ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);


        $title = $_POST['title'];
        $des = $_POST['des'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $loc = $_POST['loc'];

        $query = " UPDATE upcoming SET title='$title' ,image='$img_des' ,des='$des' ,date='$date' ,time='$time' , loc='$loc' where id=$id";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Updated Successfully";
            $_SESSION['status-code'] = "success";
            header('location:editEvent.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:editEvent.php');
        }

    }
?>



    <section id="upload">
        
                
        <div class="pinakalabas">
            <div class="labas">
                            
                <form method="POST" enctype="multipart/form-data">
                    <h1 class="h1up">UPCOMING EVENT:</h1>
                <div class="loob">
                    <div class="iisang">
                        <label for="image">Add Image:</label>
                        <input type="file"  name="image" ><img src="<?php echo $img_des; ?>" alt="" width="100px">
                    </div>
                    <div class="isang">
                        <label for="title">Event Title:</label>
                        <input type="text" name="title"  placeholder="Enter the Event Title" value="<?php echo $title; ?>">
                    </div>
                    <div class="isang">
                        <label for="des">Add Description:</label>
                        <textarea name="des" id="descrip"  placeholder="Add Description" ><?php echo $des; ?></textarea>
                    </div>
                    <div class="isang">
                        <label for="date">Insert Date:</label>
                        <input type="date"  name="date" value="<?php echo $date; ?>">
                    </div>
                    <div class="isang">
                        <label for="time">Insert Time:</label>
                        <input type="time"  name="time" value="<?php echo $time; ?>">
                    </div>
                    <div class="isang">
                        <label for="loc">Add Location:</label>
                        <input type="text" name="loc" placeholder="Add Location" value="<?php echo $loc; ?>">
                    </div>
            
                    <div class="button">
                        <div class="submit">
                            <button name="submitevent" id="send">UPDATE</button>
                            <button class="cancel"> <a href="editEvent.php"> CANCEL</a></button>
                        </div>
                    </div>
                </div>
                </form>
                
            </div>
        </div>
        
        
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            // text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status-code']; ?>",
            confirmButtonColor: "#020049",
            confirmButtonText: "Ok",

            });
    </script>
    <?php
    unset($_SESSION['status']);
}
?>