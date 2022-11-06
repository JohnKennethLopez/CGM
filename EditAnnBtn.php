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

    $con = mysqli_connect('localhost','root','','cgm');    

    $id = $_GET['edit'];
    $sql = "SELECT * FROM announcement WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $img = $row['img'];
    $chapter = $row['cgmchapter'];
    $anntitle = $row['announceTitle'];
    $caption = $row['caption'];

    if(isset($_POST['submitannounce'])){
        $image = $_FILES['img'];
        print_r($_FILES['img']);
        $img_loc = $_FILES['img']['tmp_name'];
        $img_name = $_FILES['img']['name'];
        $img ="upload/" .$img_name;
        move_uploaded_file($img_loc,'upload/'.$img_name);


        $chap = $_POST['cgmchapter'];
        $anntitle = $_POST['announceTitle'];
        $caption = $_POST['caption'];

        $query = "UPDATE announcement SET img='$img', cgmchapter='$chap', announceTitle='$anntitle', caption='$caption' where id=$id";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Post Successfully";
            $_SESSION['status-code'] = "success";
            header('location:editAnnounce.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:editAnnounce.php');
        }

    }
?>



    <section id="upload">
        
                
        <div class="pinakalabas">
        <div class="labas">
                <form method="POST" enctype="multipart/form-data">
                <h1>ANNOUNCEMENT:</h1>
                <div class="loob">
                <div class="iisang">
                        <label for="img">Add Image:</label>
                        <input type="file" name="img"><img src="<?php echo $img; ?>" alt="" width="100px">
                    </div>
                    <div class="isang">
                        <label for="church">CGM Chapter</label>
                            <select name="cgmchapter" id="church" required value="">
                                <option value="select" disabled selected><?php echo $chapter; ?></option>
                                    <option value="CGM Las Piñas Main">CGM Las Piñas Main</option>
                                    <option value="CGM Bacoor, Cavite">CGM Bacoor, Cavite</option>
                                    <option value="CGM Balete, Batangas">CGM Balete, Batangas</option>
                                    <option value="CGM Bustos, Bulacan">CGM Bustos, Bulacan</option>
                                    <option value="CGM Cabuyao, Laguna">CGM Cabuyao, Laguna</option>
                                    <option value="CGM Candaba, Pampanga">CGM Candaba, Pampanga</option>
                                    <option value="CGM EDSA Mandaluyong">CGM EDSA Mandaluyong</option>
                                    <option value="CGM Gattaran, Cagayan">CGM Gattaran, Cagayan</option>
                                    <option value="CGM Hinigaran, Negros">CGM Hinigaran, Negros</option>
                                    <option value="CGM Mabini, Tanauan">CGM Mabini, Tanauan</option>
                                    <option value="CGM Mariveles, Bataan">CGM Mariveles, Bataan</option>
                                    <option value="CGM Nasugbo, Batangas">CGM Nasugbo, Batangas</option>
                                    <option value="CGM Navotas City">CGM Navotas City</option>
                                    <option value="CGM Prieto Diaz, Sorsogon">CGM Prieto Diaz Sorsogon</option>
                                    <option value="CGM Pulilan, Bulacan">CGM Pulilan, Bulacan</option>
                                    <option value="CGM Sampaloc, Quezon">CGM Sampaloc, Quezon</option>
                                    <option value="CGM San Pedro, Laguna">CGM San Pedro, Laguna</option>
                                    <option value="CGM Sta. Rosa, Laguna">CGM Sta. Rosa, Laguna</option>
                                    <option value="CGM Taguig City">CGM Taguig City</option>
                                    <option value="CGM Gen. Tinio, Nueva Ecija">CGM Tinio, Nueva Ecija</option>
                            </select>
                    </div>
                    <div class="isang">
                        <label for="announceTitle">Announcement Title:</label>
                        <input type="text" name="announceTitle" placeholder="Enter the Title of the Announcement" value="<?php echo $anntitle; ?>">
                    </div>
                    <div class="isang">
                        <label for="caption">Add caption/Imformation:</label>
                        <textarea name="caption" id="caption" placeholder="Add caption/Information"><?php echo $caption; ?></textarea>
                    </div>
                    <div class="button">
                        <div class="submit">
                            <button name="submitannounce" id="send">UPDATE</button>
                            <button class="cancel"> <a href="editAnnounce.php"> CANCEL</a></button>
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