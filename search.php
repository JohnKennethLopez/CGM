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
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <section id="editevent">
        <div class="back">
            <div class="inn">
                <p class="backbtn"> <a href="admin2.php"> Go Back to <br>the Admin</a></p>
            </div>
        </div>
        <h1 class="head">Attendance List</h1><hr>
            <div class="filterpart">
                <form action="" method="GET">
                    <div class="filter">
                            <select name="chapter" id="church" >
                                    <option value="select" disabled selected>Choose a CGM Church</option>
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
                            </select><br>
                            <input type="date" name="attendDate"><br>
                        <button type="submit" class="filterbtn">Filter<i class="fa-solid fa-filter"></i></button>
                    </div>
                    
                </form>
            </div>
            <div class="table">
            <table class="tablecont">
                <thead>
                    <th>CGM CHAPTER</th>
                    <th>DATE</th>
                    <th>FULL NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>CONTACT NUMBER</th>
                    <th>ADDRESS</th>
                </thead>
                <?php
                    include('cgmdbconnection.php');
                    $dibconfig = mysqli_select_db($con,'cgm');
                    
                    if(isset($_GET['chapter']))
                    {
                        
                        $chapter = $_GET['chapter'];
                        $date = $_GET['attendDate'];
                        $newDate = date("Y/m/d", strtotime($date));

                        
                        $query = "SELECT * FROM attendance WHERE cgmchapter='$chapter' AND date='$newDate' ";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                ?>
                                    <tr class="scroll">
                                        <td><?= $items['cgmchapter']; ?></td>
                                        <td><?= $items['date']; ?></td>
                                        <td><?= $items['fullname']; ?></td>
                                        <td><?= $items['age']; ?></td>
                                        <td><?= $items['gender']; ?></td>
                                        <td><?= $items['contactnumber']; ?></td>
                                        <td><?= $items['address']; ?></td>
                                    </tr>
                                <?php
                            }
                        }
                        else
                        {
                             ?>
                                <tr>
                                    <td colspan="7">No Record Found!!!</td>
                                </tr>
                            <?php
                        }
                    }
                    ?>
                    
            </table>
        </div>
    </section>
</body>
</html>