

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
    <link rel="stylesheet" href="css/cmup.css">
</head>
<body>

<?php

include('cgmdbconnection.php');    

    $id = $_GET['edit'];
    $sql = "SELECT * FROM cmimage WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $image = $row['image'];
    $info = $row['info'];


    if(isset($_POST['submitcm'])){
        $image = $_FILES['image'];
        print_r($_FILES['image']);
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        $img_des ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);

        $info = $_POST['info'];

        $query = "UPDATE cmimage SET image='$img_des' , info='$info' where id=$id";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Updated Successfully";
            $_SESSION['status-code'] = "success";
            header('location:editCM.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:editCM.php');
        }

    }
?>



    <section id="upload">
        
                
        <div class="pinakalabas">
            <div class="labas">
                            
                <form method="POST" enctype="multipart/form-data">
                    <h1 class="h1up">Photo & Info/Description for Council & Ministry:</h1>
                <div class="loob">
                
                    <div class="isang">
                        <label for="image">Add Image:</label>
                        <input type="file"  name="image" required><img src="<?php echo $image; ?>" alt="" width="300px">
                    </div>
                    
                    <div class="isang">
                        <label for="info">INFO/DESCRIPTION:</label>
                        <textarea name="info" id="info"><?php echo $info; ?></textarea>
                        <p class="note">Note: Please remove all ' in the iframe so that you don't encounter some error</p>
                    </div>
            
                    <div class="button">
                        <div class="submit">
                            <button name="submitcm" id="send">UPDATE</button>
                            <button class="cancel"> <a href="editCM.php"> CANCEL</a></button>
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