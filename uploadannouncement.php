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
    <link rel="stylesheet" href="css/upannounce.css">
    <script src="JavaScript/announcepic.js" defer></script>
</head>
<body>
    <section id="announcement">
    <div class="back">
            <div class="inn">
                <p class="backbtn"> <a href="admin2.php"> Go Back to <br>the Admin</a></p>
            </div>
        </div>
        <div class="pinakalabas">
            <div class="labass">
                <form action="announce.php" method="POST" enctype="multipart/form-data">
                <h1>ANNOUNCEMENT:</h1>
                <div class="loob">
                <div class="iisang">
                <div class="container">
                            <div class="wrapper">
                                <div class="upimg">
                                    <img id="uploadimage" src="" alt="">
                                </div>
                                <div class="content">
                                    <div class="icon">
                                        <img src="css/image/photo.png" alt="" width="60px">
                                    </div>
                                    <div class="nofile">
                                        <p>Add Photo</p>
                                    </div>
                                </div>
                                <div id="cancel">
                                    <img src="css/image/cancel.png" alt="" width="15px">
                                </div>
                                <div class="file-name">
                                    <p>File Name Here</p>
                                </div>
                            </div>
                            <input id="intBTN" type="file" name="img" hidden required>
                            <p onclick="defaultbtnactive()" id="custom-btn">Choose a File</p>
                            
                        </div>
                        
                    </div>
                    <div class="isang">
                        <label for="church">CGM Chapter</label>
                            <select name="cgmchapter" id="church" required>
                                <option value="select" disabled selected>Select CGM Church</option>
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
                            <input type="text" name="announceTitle" placeholder="Enter the Announcement Title" required>
                        </div>
                        <div class="isang">
                            <label for="caption">Add caption/Imformation:</label>
                            <textarea name="caption" id="caption" placeholder="Add caption/Information"></textarea>
                        </div>
                            <input type="submit" name="submitannounce" id="send" value="POST">
                    </div>
                    </form>
                </div>
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