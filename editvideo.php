

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

    $sql = "SELECT * FROM cmvideo WHERE id = '1'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $video = $row['video'];
    $head = $row['head'];


    if(isset($_POST['submitcm'])){
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];
        $folder = "upload/" . $filename;
        move_uploaded_file($tempname, $folder);

        $head = $_POST['head'];

        $query = "UPDATE cmvideo SET video='$folder' , head='$head' where id= '1' ";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Updated Successfully";
            $_SESSION['status-code'] = "success";
            header('location:editvideo.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:editvideo.php');
        }

    }
?>



    <section id="upload">
        
                
        <div class="pinakalabas">
            <div class="labas">
                            
                <form method="POST" enctype="multipart/form-data">
                    <h1 class="h1up">Video for Council & Ministry:</h1>
                <div class="loob">
                
                    <div class="isang">
                        <label for="file">Video:</label>
                        <input type="file"  name="file" required><video width="300px" autoplay muted loop controls>
                                                                    <source src="<?php echo $video; ?>" type="video/mp4">
                                                                    Your browser does not support HTML video.
                                                                </video>
                    </div>
                    
                    <div class="isang">
                        <label for="head">header:</label>
                        <textarea name="head" id="head"><?php echo $head; ?></textarea>
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