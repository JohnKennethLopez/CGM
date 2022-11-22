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





    <section id="upload">
        
                
        <div class="pinakalabas">
            <div class="labas">
                            
                <form action="manna.php" method="POST">
                    <h1 class="h1up">DAILY MANNA:</h1>
                <div class="loob">
                    
                    <div class="isang">
                        <label for="manna">DAILY MANNA Iframe:</label>
                        <textarea name="manna" id="manna" placeholder="Enter the IFRAME of the Video"></textarea>
                        <p class="note">Note: Please remove all ' in the iframe so that you don't encounter some error</p>
                    </div>
            
                    <div class="button">
                        <div class="submit">
                            <button name="submitmanna" id="send">UPLOAD</button>
                            <button class="cancel"> <a href="editprog.php"> CANCEL</a></button>
                            <button class="cancel"><a href="deletemanna.php">DELETE Daily Manna</a></button>
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