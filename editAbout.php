<?php
session_start();

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

    
    $sql = "SELECT * FROM about WHERE id='1'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $his = $row['history'];
    $mis = $row['mission'];
    $vis = $row['vision'];

    if(isset($_POST['submitabout'])){
        $his = $_POST['history'];
        $mis = $_POST['mission'];
        $vis = $_POST['vision'];

        $query = "UPDATE about SET history='$his', mission='$mis', vision='$vis' where id='1'";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Successfully";
            $_SESSION['status-code'] = "success";
            header('location:editAbout.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:editAbout.php');
        }

    }
?>



    <section id="upload">
        
                
        <div class="pinakalabas">
            <div class="labas">
                <form action="" method="POST">
                    <h1 class="h1up">ABOUT INFORMATION:</h1>
                <div class="loob">
                    </div>
                    <div class="isang">
                        <label for="history">Histoy:</label>
                        <textarea name="history" id="history"><?php echo $his; ?></textarea>
                    </div>
                    <div class="isang">
                        <label for="mission">MISSION:</label>
                        <textarea name="mission" id="mission"><?php echo $mis; ?></textarea>
                    </div>
                    <div class="isang">
                        <label for="vision">VISION:</label>
                        <textarea name="vision" id="vision"><?php echo $vis; ?></textarea>
                    </div>
                    <div class="button">
                        <div class="submit">
                            <button name="submitabout" id="send">UPDATE</button>
                            <button class="cancel"> <a href="uploadevent.php"> CANCEL</a></button>
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