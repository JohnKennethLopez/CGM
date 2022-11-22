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
    $sql = "SELECT * FROM give WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $chap = $row['cgmchapter'];
    $des = $row['des'];
    $method = $row['method'];
    $gcash = $row['gcash'];
    $gform = $row['gform'];

    if(isset($_POST['submitgive'])){
        
        $des = $_POST['des'];
        $method = $_POST['method'];
        $gcash = $_POST['gcash'];
        $gform = $_POST['gform'];


        $query = "UPDATE give SET des='$des' , method='$method' , gcash='$gcash', gform='$gform' where id=$id";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['status'] = "Updated Successfully";
            $_SESSION['status-code'] = "success";
            header('location:editgive.php');
        }else{
            $_SESSION['status'] = "Something is wrong";
            $_SESSION['status-code'] = "error";
            header('location:editgive.php');
        }

    }
?>



    <section id="upload">
        
                
        <div class="pinakalabas">
            <div class="labas">
                            
                <form method="POST">
                    <h1 class="h1up">Tithes & Offerings Information of <?php echo $chap; ?>:</h1>
                <div class="loob">
                
                    <div class="isang">
                        <label for="des">Description of giving:</label>
                        <textarea name="des" id="des"><?php echo $des; ?></textarea>
                    </div>
                    <div class="isang">
                        <label for="method">Bank Account Number:</label>
                        <textarea name="method" id="method"><?php echo $method; ?></textarea>
                        <p class="note">Note: Type "Google Form" If you are going to use Google Form as your method</p>
                    </div>
                    <div class="isang">
                        <label for="gcash">Gcash Number:</label>
                        <input type="text" name="gcash" value="<?php echo $gcash; ?>">
                        <p class="note">Note: </p>
                    </div>
                    <div class="isang">
                        <label for="gform">Google Form Link:</label>
                        <textarea name="gform" id="gform"><?php echo $gform; ?></textarea>
                        <p class="note">Note: Please Input the link Here If You are using Google Form </p>
                    </div>
            
                    <div class="button">
                        <div class="submit">
                            <button name="submitgive" id="send">UPDATE</button>
                            <button class="cancel"> <a href="editgive.php"> CANCEL</a></button>
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