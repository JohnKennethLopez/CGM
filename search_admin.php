<?php
session_start();
include('cgmdbconnection.php');

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
    <link rel="stylesheet" href="css/search.css" media="all">
    <link rel="stylesheet" href="css/print.css" media="print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <section id="editevent">
        <div class="header">
            <div class="lgg"><img class="lg" src="logo.png" alt=""></div>
            <div class="cgmm"><h1 class="cgm">Church of God's Miracles</h1></div>
        </div>
        <div class="back">
            <div class="inn">
            <a style="text-decoration: none;" class="printbtn" href="admin2.php">BACK</a>
            </div>
        </div>
        <h1 class="head">Attendance List</h1><hr>
            <div class="filterpart">
                <form action="" method="GET">
                    <div class="filter">
                            <select name="chapter" id="church" >
                            <option value="select" disabled selected>Choose a CGM Church</option>
                        <?php
                        $chapter = "SELECT * FROM chapter";
                        $chapter_run = mysqli_query($con, $chapter);

                        while($row = mysqli_fetch_array($chapter_run)){

                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['cgmchapter'] ?></option>
                        <?php } ?>
                            </select><br>
                            <div class="datefilter">
                                <div class="fromdate">
                                    <label class="date_label" for="from_date">From Date:</label><br>
                                    <input type="date" name="from_date" value="<?php if(isset($_GET['chapter'])){ echo $_GET['from_date']; } ?>">
                                </div>
                                <div class="todate">
                                    <label class="date_label" for="to_date">To Date:</label><br>
                                    <input type="date" name="to_date" value="<?php if(isset($_GET['chapter'])){ echo $_GET['to_date']; } ?>">
                                </div>
                            </div>
                            
                        <button type="submit" class="filterbtn">Filter<i class="fa-solid fa-filter"></i></button><br><br>
                        <button onclick="window.print()" class="printbtn">PRINT <i class="fa-solid fa-print"></i></button><br><br>
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
                        $from_date = $_GET['from_date'];
                        $to_date = $_GET['to_date'];
                        $new_from_date = date("Y/m/d", strtotime($from_date));
                        $new_to_date = date("Y/m/d", strtotime($to_date));
                        

                        $query = "SELECT * FROM attendance WHERE cgm_id='$chapter' AND date BETWEEN '$new_from_date' AND '$new_to_date' ";
                        $query_run = mysqli_query($con,$query);
                        $count = mysqli_num_rows($query_run);
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
                    }else {
                    $count = '0';
                    }
                    ?>
            </table>
        </div>
        <div class="totalattend">
                <h1 class="total">Total of Attendees: <?php echo $count; ?></h1>
            </div>
    </section>
</body>
</html>
