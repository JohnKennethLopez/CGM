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
    <link rel="stylesheet" href="css/Editabout.css">
</head>
<body>

<?php

include('cgmdbconnection.php');    

    $id = $_GET['edit'];
    $sql = "SELECT * FROM gmap WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $chap = $row['cgmchapter'];
    $f2f = $row['f2fservice'];
    $online = $row['online'];
    $add = $row['address'];
    $map = $row['googlemap'];
    $fb = $row['fblink'];

    if(isset($_POST['submitgmap'])){
        
        $f2f = $_POST['f2fservice'];
        $online = $_POST['online'];
        $add = $_POST['address'];
        $map = $_POST['googlemap'];
        $fb = $_POST['fblink'];

        $query = "UPDATE gmap SET f2fservice='$f2f' , online='$online' , address='$add' , googlemap='$map', fblink = '$fb' where id=$id";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Updated Successfully";
            $_SESSION['status-code'] = "success";
            header('location:editGmap.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:editGmap.php');
        }

    }
?>



    <section id="upload">
        
                
        <div class="pinakalabas">
            <div class="labas">
                            
                <form method="POST" >
                    <h1 class="h1up">Google Map and Service Schedule of <?php echo $chap; ?>:</h1>
                <div class="loob">
                
                    <div class="isang">
                        <label for="f2fservice">F2F Service Schedule:</label>
                        <textarea name="f2fservice" id="f2fservice"><?php echo $f2f; ?></textarea>
                        <p class="note">Note: Please put the time schedule inside a span tag and divide them with "|" </p>
                    </div>
                    <div class="isang">
                        <label for="online">Online Service Schedule:</label>
                        <textarea name="online" id="online"><?php echo $online; ?></textarea>
                        <p class="note">Note: Please put the time schedule inside a span tag and divide them with "|" </p>
                    </div>
                    <div class="isang">
                        <label for="address">Address:</label>
                        <textarea name="address" id="address"><?php echo $add; ?></textarea>
                        <p class="note">Note: If the Google map for this Chapter is available, please input the Iframe and remove "WE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!"</p>
                    </div>
                    <div class="isang">
                        <label for="googlemap">Google Map Iframe:</label>
                        <textarea name="googlemap" id="googlemap"><?php echo $map; ?></textarea>
                        <p class="note">Note: Please change the width to 100% and remove all ' in the iframe so that you don't encounter some error</p>
                    </div>
                    <div class="isang">
                        <label for="fblink">FaceBook Page/Account Link:</label>
                        <textarea name="fblink" id="fblink"><?php echo $fb; ?></textarea>
                    </div>
            
                    <div class="button">
                        <div class="submit">
                            <button name="submitgmap" id="send">UPDATE</button>
                            <button class="cancel"> <a href="editGmap.php"> CANCEL</a></button>
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