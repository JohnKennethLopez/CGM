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
            <div class="search">
                <form action="" method="GET">
                    <div class="searchbar">
                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" id="search" placeholder="Enter your Search">
                        <button type="submit" class="searchbtn"><i class="fas fa-search"></i></button>
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
                    
                    if(isset($_GET['search']))
                    {
                        $filter = $_GET['search'];
                        $query = "SELECT * FROM attendance WHERE CONCAT(cgmchapter, date) LIKE '%$filter%' ";
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